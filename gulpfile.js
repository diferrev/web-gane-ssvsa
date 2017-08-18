
/* Modulos gulp */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require( 'gulp-uglify' ),
    concat = require( 'gulp-concat' ),
    cssnano = require( 'gulp-cssnano'),
    gutil = require( 'gulp-util' ),
    critical = require( 'critical' ).stream,
    livereload = require('gulp-livereload');

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

// Generar e insertar en línea el CSS critico */
gulp.task('critical', function () {
    gulp.src('./header.html')
        .pipe(critical({
            base: './', 
            inline: true, 
            css: ['./style.css'],
            minify: true
        }))
        .on('error', function(err) { gutil.log(gutil.colors.red(err.message)); })
        .pipe(gulp.dest('./'));
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
    .pipe(gulp.dest( config.buildPath + '/js/'))
    .pipe(livereload());
});

/* Vigilar cambios en archivos */
gulp.task('watch', function(){
  livereload.listen();
  gulp.watch(config.sassPath + '/*.scss', ['sass', 'css']);
  gulp.watch(config.jsPath + '/*.js', ['js']);
});

gulp.task('default', [ 'sass', 'css', 'js', 'watch' ]);