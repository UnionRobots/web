var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

gulp.task('styles', function() {
    // gulp.src('scss/**/*.scss')
    gulp.src('scss/**/style.scss')
        .pipe(sass().on('error', sass.logError))
        // .pipe(gulp.dest('./css/'));
        .pipe(gulp.dest('../urob/'));

    gulp.src('../urob/style.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('../urob/'));
});


gulp.task('default',function() {
    gulp.watch('scss/**/*.scss',['styles']);
    gulp.watch('style.scss',['styles']);
});