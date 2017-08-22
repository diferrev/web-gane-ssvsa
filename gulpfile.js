
/* Modulos gulp */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require( 'gulp-uglify' ),
    concat = require( 'gulp-concat' ),
    cssnano = require( 'gulp-cssnano'),
    gutil = require( 'gulp-util' );

/* Objeto de configuración */
var config = {
    sassPath: './src/sass',
    cssPath: './src/css',
    jsPath: './src/js',
    buildPath: './assets'
}

/* Procesador archivo Sass */
gulp.task('sass', function(){
    gulp.src([
        config.sassPath + '/style.scss'
    ])
    .pipe( sass() )
    .pipe( gulp.dest( config.cssPath ) );
});

/* Concatenar y minificar todas las hojas de estilos */
gulp.task('css', function(){
    gulp.src([
        config.cssPath + '/theme.css',
        config.cssPath + '/vendor/*.css',
        config.cssPath + '/style.css'
    ])
    .pipe( concat( 'style.css' ) )
    .pipe( cssnano() )
    .pipe( gulp.dest( './' ) );
});

/* Comprimir js */
gulp.task('js', function(){
    gulp.src([
        config.jsPath + '/vendor/*.js',
        config.jsPath + '/functions.js',
        config.jsPath + '/*.js'
    ])
    .pipe(uglify())
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest( config.buildPath + '/js/'));
});

/* Vigilar cambios en archivos */
gulp.task('watch', function(){
    gulp.watch(config.sassPath + '/*.scss', ['sass']);
    gulp.watch(config.cssPath + '/*.css', ['css']);
    gulp.watch(config.jsPath + '/*.js', ['js']);
});

gulp.task('default', [ 'sass', 'js', 'watch' ]);