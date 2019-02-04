const gulp = require('gulp')
const plumber = require('gulp-plumber');
const watch = require('gulp-watch');

const data = {
	task: 'img',
	default: 'img',
}

module.exports = function (control) {
	gulp.task('img', function () {
		return gulp.src(control.config.paths.input.img)
			.pipe(plumber(function (...args) { control.plumb.bind(this)(...args) }))
			.pipe(gulp.dest(control.config.paths.output.img))
			.on('error', function (...args) { control.plumb.bind(this)(...args) })
			.on('end', () => console.log('Images finalizado!'));
	});

	gulp.task('imgwatch', () => {
		watch(control.config.paths.input.img, () => {
			gulp.start('img')
		});
	});
}

module.exports.taskData = data
