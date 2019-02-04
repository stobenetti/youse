const gulp = require('gulp')
const plumber = require('gulp-plumber');
const inject = require('gulp-inject-string')
const sourcemaps = require('gulp-sourcemaps');
const watch = require('gulp-watch');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const data = {
	task: 'js',
	default: 'js',
	compile: ['js', 'jsmin'],
}

module.exports = function (control) {
	gulp.task('js', ['customjs', 'plugins']);

	gulp.task('customjs', function () {
		return gulp.src(control.config.paths.input.js.custom)
			.pipe(sourcemaps.init())
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(babel({
				presets: ['es2015']
			}))
			.pipe(concat('app.js'))
			.pipe(inject.prepend('var Env = ' + JSON.stringify(control.environment) + ';'))
			.pipe(inject.prepend('(function(){'))
			.pipe(inject.append('})()'))
			.pipe(sourcemaps.write('.'))
			.pipe(gulp.dest(control.config.paths.output.js))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('CustomJS finalizado!'));
	});

	gulp.task('plugins', function () {
		return gulp.src(control.config.paths.input.js.plugins)
			.pipe(sourcemaps.init())
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(concat('plugins.js'))
			.pipe(sourcemaps.write('.'))
			.pipe(gulp.dest(control.config.paths.output.js))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('PluginsJS finalizado!'));
	});

	gulp.task('jsmin', function () {
		return gulp.src([`${control.config.paths.output.js}plugins.js`, `${control.config.paths.output.js}app.js`])
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(uglify())
			.pipe(gulp.dest(control.config.paths.output.js))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('JSMin finalizado!'));
	})

	gulp.task('jswatch', () => {
		watch(control.config.paths.input.js.watch, () => {
			gulp.start('customjs')
		});
	});
}

module.exports.taskData = data
