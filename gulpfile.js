
/* Modulos gulp */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require( 'gulp-uglify' ),
    concat = require( 'gulp-concat' ),
    livereload = require('gulp-livereload');

/* Objeto de configuración */
var config = {
    sassPath: './src/sass',
    jsPath: './src/js',
    buildPath: './assets'
}

/* Preprocesamiento de estilos Sass */
gulp.task('sass', function(){
    gulp.src([
        config.sassPath + '/style.scss'
    ])
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(livereload());
});

/* Comprimir js */
gulp.task('js', function(){
    gulp.src([
        config.jsPath + '/functions.js',
        config.jsPath + '/*.js'
    ])
    .pipe(uglify())
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest( config.buildPath + '/js/'))
    .pipe(livereload());
});

/* Vigilar cambios en archivos */
gulp.task('watch', function(){
  livereload.listen();
  gulp.watch(config.sassPath + '/*.scss', ['sass']);
  gulp.watch(config.jsPath + '/*.js', ['js']);
});

gulp.task('default', ['sass','js','watch']);