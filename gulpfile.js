'use strict';

var gulp = require('gulp'),
		less = require('gulp-less');

gulp.task('less', function() {
	gulp.src('wp-content/themes/haitiEnergy/styles/less/styles.less')
			.pipe(less())
			.pipe(gulp.dest('wp-content/themes/haitiEnergy/styles/css/'));
});



gulp.task('default', function() {
	var lessTasks = ['less'];

	gulp.watch('wp-content/themes/haitiEnergy/styles/less/**/*.less', lessTasks);
});