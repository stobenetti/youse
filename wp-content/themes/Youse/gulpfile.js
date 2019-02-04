const gulp = require('gulp')

const control = {
	config: require('./gulpconfig.json'),
	environment: {},
	args: require('yargs').argv,
	plumb: function (e) {
		console.log(e.message);
		this.emit('end');
	}
}

const glob = require('glob')
const tasks = glob.sync('./gulp/**/task.*.js')
	.map(file => require(file))

const transformTasks = tasks => tasks.filter(task => task).reduce((arr, task) => arr.concat(task), [])

tasks.forEach(task => task(control))

gulp.task('default', transformTasks(tasks.map(task => task.taskData.default)));
gulp.task('compile', transformTasks(tasks.map(task => task.taskData.compile || task.taskData.default)));
gulp.task('watch', transformTasks(tasks.map(task => task.taskData.task)).map(task => task + 'watch'));

transformTasks(tasks.map(task => task.taskData.start))
	.forEach(task => gulp.start(task))
