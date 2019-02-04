const gulp = require('gulp')
const plumber = require('gulp-plumber');
const inject = require('gulp-inject-string')
const sourcemaps = require('gulp-sourcemaps');
const watch = require('gulp-watch');
const sass = require('gulp-sass')
const prefix = require('gulp-autoprefixer')
const jsonSass = require('json-sass')

const data = {
	task: 'css',
	default: 'css',
}

module.exports = function (control) {
	gulp.task('css', function () {
		const env = Object.keys(control.environment)
			.reduce((obj, key) => {
				if (typeof control.environment[key] !== 'object') {
					obj[key] = control.environment[key]
				}
				return obj
			}, {})

		return gulp.src(control.config.paths.input.scss.main)
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(sourcemaps.init())
			.pipe(inject.prepend('$Environment: ' + jsonSass.convertJs(env) + ';\n'))
			.pipe(sass({
				includePaths: control.config.paths.input.scss.import,
				indentType: 'tab',
				indentWidth: '1',
				outFile: `${control.config.paths.output.css}main.css`,
				outputStyle: 'compressed'
			}))
			.pipe(prefix("last 10 version", "> 1%", "ie 8", "ie 7"))
			.pipe(sourcemaps.write('.'))
			.pipe(gulp.dest(control.config.paths.output.css))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('CSS finalizado!'))
	})

	gulp.task('csswatch', function () {
		watch(control.config.paths.input.scss.watch, function () {
			gulp.start('css')
		})
	})
}

module.exports.taskData = data
