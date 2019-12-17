var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');

gulp.task('convertToCss', async function() {
    gulp.src('./scss/lecture.scss')
        .pipe(plumber())
        .pipe(sass({outputStyle: 'expanded'}))
        .pipe(autoprefixer())
        // .pipe(gulp.dest('././my-todo-list/css'));
        .pipe(gulp.dest('./scss/css'));
});

gulp.task('default', function() {
    gulp.watch('./scss/**/*.scss', gulp.series('convertToCss'));
});