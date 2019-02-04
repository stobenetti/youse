const gulp = require('gulp')
const plumber = require('gulp-plumber');
const watch = require('gulp-watch');

const data = {
	task: 'fonts',
	default: 'fonts',
}

module.exports = function (control) {
	gulp.task('fonts', function () {
		return gulp.src(control.config.paths.input.fonts)
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(gulp.dest(control.config.paths.output.fonts))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('Fonts finalizado!'))
	})

	gulp.task('fontswatch', () => {
		watch(control.config.paths.input.fonts, () => {
			gulp.start('fonts')
		})
	})
}

module.exports.taskData = data
