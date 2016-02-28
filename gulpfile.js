var gulp          = require('gulp');
var sass          = require('gulp-sass');
var concat        = require('gulp-concat');
// var jshint        = require('gulp-jshint');
var uglify        = require('gulp-uglify');
var browserSync   = require('browser-sync');
var reload        = browserSync.reload;
var autoprefixer = require('gulp-autoprefixer');


gulp.task('serve', function() {
    //watch files
    browserSync.init({
    proxy: "localhost/underscore.com/",
    });

  
});

//Output Sass-folder to style.css
gulp.task('sass', function () {
    gulp.src('./sass/*.scss')
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'serve'], function () {
    gulp.watch("sass/**/*.scss",  ['sass']);
});
