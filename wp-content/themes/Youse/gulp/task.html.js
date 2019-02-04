const gulp = require('gulp')
const path = require('path')
const plumber = require('gulp-plumber');
const watch = require('gulp-watch');
const fs = require("fs")
const replace = require("gulp-replace")
const cheerio = require('cheerio')
const glob = require('glob')
const deleteRequireCache = require('./helper.delete-require-cache.js')
const Handlebars = require('handlebars')

const data = {
	task: 'html',
	default: 'html',
}

module.exports = function (control) {

	const applyHandlebarsHelpers = () => {
		glob.sync(control.config.paths.input.html.handlebars).forEach(helper => {
			deleteRequireCache(path.parse(helper).base)
			const f = require('../' + helper)
			const name = helper.match(/\/([a-zA-Z0-9]+)\.js/).pop()
			Handlebars.registerHelper(name, f)
		})
	}

	applyHandlebarsHelpers()

	/**
	 * A expressão vem com a string de identação, os atributos, e o conteúdo da tag, caso não tenha sido especificado
	 * @param {string} tag Tag a ser buscada
	 * @param {string} content Opcional. Conteúdo da tag, para filtros
	 * @return {RegExp} Expressão regular para encontrar a string da tag
	 */
	const tagRegExp = (tag, content) => new RegExp(`([\\t ]+)?<${tag}(.+)?>([\\s]+)?${content || '([a-zA-Z\-\.]+)'}([\\s]+)?<\\/${tag}>`, 'gm')

	/**
	 * Replace <import> and <variable> tags with the value of the document needed
	 * @param {string} match Html of the <import> tag
	 */
	const doImport = match => {
		const importTag = cheerio.load(match)('import');
		const identation = (match.match(/^\s+/g) || ['']).shift()
		const file = importTag.html();

		try {
			let importedFile = fs.readFileSync(control.config.paths.input.html.import + `_${file}.html`, 'utf8')
				.toString()
				.trim()
				.replace(/\n/g, '\n' + identation)

			const template = Handlebars.compile(importedFile)
			const attribs = Object.keys(importTag[0].attribs).reduce((obj, key) => {
				try { importTag[0].attribs[key] = JSON.parse(importTag[0].attribs[key].replace(/'/g, `"`)) } catch (e) { }
				obj[key] = importTag[0].attribs[key] === "" ? true : importTag[0].attribs[key]
				return obj
			}, {})

			Object.keys(attribs).forEach(key => attribs[key] = typeof attribs[key] == 'string' ? new Handlebars.SafeString(attribs[key]) : attribs[key])

			attribs.Env = JSON.parse(JSON.stringify(control.environment));

			(function safeStringify(obj) {
				Object.keys(obj).forEach(key => {
					if (typeof obj[key] == "object") {
						safeStringify(obj[key])
					}
					if (typeof obj[key] == "string") {
						obj[key] = new Handlebars.SafeString(obj[key])
					}
				})
			})(attribs.Env)

			importedFile = template(attribs)

			importedFile = importedFile
				.replace(tagRegExp('import'), doImport)

			return identation + importedFile;
		} catch (e) {
			console.log('e', e.message)
			return match;
		}
	}

	const applyHandlebars = match => Handlebars.compile(match)({ Env: control.environment })

	gulp.task('html', function (params) {
		return gulp.src(control.config.paths.input.html.files)
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(replace(/[\s\S]+/g, applyHandlebars))
			.pipe(replace(tagRegExp('import'), doImport))
			.pipe(gulp.dest(control.config.paths.output.html))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('Html finalizado!'));
	});
	gulp.task('htmlwatch', function () {
		watch(control.config.paths.input.html.watch, function () {
			gulp.start('html')
		})

		watch(control.config.paths.input.html.handlebars, function () {
			applyHandlebarsHelpers()
			gulp.start('html')
		})
	});
}

module.exports.taskData = data
