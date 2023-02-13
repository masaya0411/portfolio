var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob'); 

gulp.task('sass', function(){
    gulp.src('./scss/**/*.scss')
      .pipe(sassGlob())
      .pipe(sass())
      .pipe(gulp.dest('./css'));
  });

  gulp.task('watch', function(){
    gulp.watch('./scss/**/*.scss', ['sass']);
  });