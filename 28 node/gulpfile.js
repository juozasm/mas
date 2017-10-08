var gulp = require('gulp');
var sass = require('gulp-sass');
var CleanCSS = require('clean-css');
let cleanCSS = require('gulp-clean-css');
var less = require('gulp-less');
var path = require('path');

gulp.task('message',function(){
    console.log('gulp is runin');
});

gulp.task('sass', function () {
  return gulp.src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch',function(){
    gulp.watch('./sass/*.scss',['sass']);
    gulp.watch('./pre-less/*.less',['less']);
    gulp.watch('./css/*.css',['minify-css'])
})

gulp.task('default',['watch']);

gulp.task('minify-css', () => {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./minCSS'));
});

gulp.task('less', function () {
    gulp.src('pre-less/*.less')
    .pipe(less())
    .pipe(gulp.dest('less'))
   
});