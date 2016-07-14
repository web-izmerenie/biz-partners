'use strict'
var gulp = require('gulp');
var rename = require("gulp-rename");
var less = require("gulp-less");
var autoprefixer = require('gulp-autoprefixer');
var clean = require('gulp-clean');
var jade = require('gulp-jade');
var browserify = require('gulp-browserify');
var browserSync = require('browser-sync').create();

var tplPath = './bitrix/templates/main';

gulp.task('styles-clean', function () {
	return gulp.src(tplPath + '/styles/build/*', { read: false })
		.pipe(clean());
});
gulp.task('scripts-clean', function () {
	return gulp.src(tplPath + '/scripts/build/*', { read: false })
		.pipe(clean());
});

gulp.task('styles', ['styles-clean'], function () {
	gulp.src(tplPath + '/styles/src/main.less')
		.pipe(less())
		.pipe(autoprefixer('last 10 versions', '> 1%', 'ie 9'))
		.pipe(rename('build.css'))
		.pipe(gulp.dest(tplPath + '/styles/build/'))
		.pipe(browserSync.stream());
});

gulp.task('jade', function () {
	gulp.src(tplPath + '/jade/*.jade')
		.pipe(jade({pretty: true}))
		.pipe(gulp.dest('./html/'))
		.pipe(browserSync.stream());
});

gulp.task('coffee', ['scripts-clean'], function () {
	gulp.src(tplPath + '/scripts/src/main.coffee', { read: false })
		.pipe(browserify({
			transform: ['coffeeify'],
			extensions: ['.coffee'],
			shim: require('./shim-browserify.json')
		}))
		.pipe(rename('build.js'))
		.pipe(gulp.dest(tplPath + '/scripts/build/'))
		.pipe(browserSync.stream());
});

gulp.task('server', function() {
	browserSync.init({
		server: {
			baseDir: "./"
		}
	});
});

gulp.task('watch', ['styles', 'coffee'], function () {
	gulp.watch(tplPath + '/styles/src/**/*.less', ['styles']);
	gulp.watch(tplPath + '/scripts/src/**/*.coffee', ['coffee']);
});

gulp.task('watch-server', ['styles', 'coffee', 'jade', 'server'], function () {
	gulp.watch(tplPath + '/styles/src/**/*.less', ['styles']);
	gulp.watch(tplPath + '/scripts/src/**/*.coffee', ['coffee']);
	gulp.watch(tplPath + '/jade/*.jade', ['jade']);
});

gulp.task('default', ['styles', 'coffee']);
