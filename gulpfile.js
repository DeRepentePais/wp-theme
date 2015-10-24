var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    minifyCss   = require('gulp-minify-css'),
    uglify      = require('gulp-uglify'),
    concat      = require('gulp-concat'),
	notify      = require("gulp-notify"),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload;

var paths = {
  css: {
    src: './src/sass/**/*.scss',
    dest: './'
  },
  sass: [
    './src/sass/'
  ],
  js:{
    src: [
     './src/js/*.js'
    ],
    dest: './assets/js'
  },
};

//================|  CSS  |===================//
gulp.task('sass', function(){
  return gulp.src(paths.css.src)
             .pipe(sass({
               includePaths:paths.sass
             }).on('error', notify.onError(function(error){})))
   //        .pipe(minifyCss())
             .pipe(gulp.dest(paths.css.dest));
});
gulp.task('watch:sass', ['sass'], reload);


//================|  JS  |===================//
gulp.task('js', function(){
  return gulp.src(paths.js.src)
             .pipe(concat('app.js'))
//             .pipe(uglify())
             .pipe(gulp.dest(paths.js.dest));
});
gulp.task('watch:js', ['js'], reload);


//===========|  SERVER TASK  |================//
gulp.task('server', ['sass', 'js'], function(){
  browserSync.init({
    proxy: 'dev.derepentepais.com.br',
    open: false
  });
  
  gulp.watch(paths.css.src, ['watch:sass']);
  gulp.watch(paths.js.src, ['watch:js']);
  gulp.watch('**/*.php', reload);
  
});
