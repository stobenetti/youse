const gulp = require('gulp')
const plumber = require('gulp-plumber');
const watch = require('gulp-watch');

const deleteRequireCache = require('./helper.delete-require-cache.js')

const data = {
	task: ['config', 'environment'],
}

module.exports = function (control) {

	const resetEnv = () => {
		deleteRequireCache('environment-variables');

		let variables
		try {
			variables = require('../environment-variables.json')
		} catch (e) {
			variables = require('../environment-variables.js')
		}

		let environment = variables;
		if (control.args.env) environment = environment[control.args.env]
		else if (control.args.prod || control.args.production) environment = environment.production;
		else environment = environment.development;

		if (!environment) environment = variables[Object.keys(variables).shift()] || {}

		control.environment = environment
	}

	gulp.task('config', () => {
		deleteRequireCache('gulpconfig');
		try {
			control.config = require('../gulpconfig.json')
		} catch (e) {
			control.config = require('../gulpconfig.js')
		}
		gulp.start('default')
	})

	gulp.task('configwatch', () => {
		watch(['./gulpconfig.json', './gulpconfig.js'], () => {
			gulp.start('config')
		})
	})

	gulp.task('environment', () => {
		resetEnv()
		gulp.start('default')
	})

	gulp.task('environmentwatch', () => {
		watch(['./environment-variables.json', './environment-variables.js'], () => {
			gulp.start('environment')
		})
	})

	resetEnv()
}

module.exports.taskData = data
