///// Plugin Includes /////
var gulp = require('gulp'),
		uglify = require('gulp-uglify'),
		plumber = require('gulp-plumber'),
		concat = require('gulp-concat'),
		jshint = require('gulp-jshint'),
		autoprefixer = require('gulp-autoprefixer'),
		browserSync = require('browser-sync'),
		reload = browserSync.reload,
		sass = require('gulp-sass');

///// Compile/Validate JS /////
gulp.task('js', function () {
	gulp.src('./js/app.js')
	.pipe(plumber())
	.pipe(jshint())
	.pipe(jshint.reporter('default', { verbose: true }))
	.pipe(concat('app.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./app/js/app.js'))
});

///// Compile Sass /////
gulp.task('sass', function () {
	gulp.src('./app/scss/**/*.scss')
	.pipe(plumber())
	.pipe(sass().on('error', sass.logError))
	.pipe(sass( {outputStyle: 'compressed'} ))
	.pipe(autoprefixer('last 2 versions'))
	.pipe(gulp.dest('./app/css'))
	.pipe(browserSync.stream())
});

///// Get PHP /////
gulp.task('php', function () {
	gulp.src('./php/*.php')
	.pipe(gulp.dest('./'))
});

///// Browser Sync /////
gulp.task('browser-sync', function () {
	browserSync.init({
		proxy: "http://localhost:8080/tt/",
		notify: false
	});
	gulp.watch('./app/scss/**/*.scss', ['sass']);
	gulp.watch('./app/js/*.js', ['js']).on('change', browserSync.reload);
	gulp.watch('./*.php', ['php']).on('change', browserSync.reload);
});

//////////////////////////////
// Default Task
//////////////////////////////
gulp.task('default', ['browser-sync']);