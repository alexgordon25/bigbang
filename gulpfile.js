'use strict';

var gulp = require('gulp');
var ngrok = require('ngrok');
var browserSync = require('browser-sync').create();;
var watch = require('gulp-watch');
var newer = require('gulp-newer');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var cssmin = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var runSequence = require('run-sequence');

// paths
var sassSrc = './sass/style.scss';
var watchSass = './sass/**/*.scss';
var sassDest = './';
var fileSrc = './**/*.php';
var jsSrc = './js/**/*.js';

// more
var hostName = 'bigbang';

// Change the `hostUrl` to your local dev server ("new-site.dev" or "localhost").
var hostUrl = hostName + '.dev'; 

gulp.task('browser-sync', function() {
	browserSync.init({
			proxy: hostUrl,
			socket: { domain: hostName + '.ngrok.io:80' }
		},
		function (err, bs) {
				ngrok.connect({
					addr: bs.options.get('port'),
					subdomain: hostName
				}, function (err, url) {})
			}
	);
	gulp.watch([sassSrc, watchSass], ['sass', 'cssmin']);
	gulp.watch([fileSrc, jsSrc]).on('change', browserSync.reload);
});

gulp.task('sass', function () {
gulp.src(sassSrc)
	.pipe(sourcemaps.init())
	.pipe(sass())
	.on( 'error', function( err ) {
		console.log( err );
		this.emit( 'end' );
	})
	.pipe(autoprefixer('last 4 version'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(sassDest))
	.pipe(browserSync.stream());
});

gulp.task('cssmin', function() {
	return gulp.src('./style.css')
		.pipe(cssmin())
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest(sassDest));
});

// Run tasks without watching.
gulp.task('build', function(cb) {
	runSequence('sass', 'cssmin', cb);
});

// Rerun the task when a file changes
gulp.task('watch', function() {
	gulp.watch([sassSrc, watchSass], ['sass', 'cssmin']);
});

// Run Browser Sync task
gulp.task('browsersync', ['browser-sync']);

// Run default task
gulp.task('default', function(cb) {
	runSequence('sass', 'cssmin', 'watch', cb);
});
