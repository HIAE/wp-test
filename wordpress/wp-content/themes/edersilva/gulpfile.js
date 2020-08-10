// Caminhos

var paths = require('./gulppaths.json');

// MÃ³dulos comuns
var gulp  = require('gulp');
var buffer = require('vinyl-buffer');
var sourcemaps = require('gulp-sourcemaps');
var gulpif = require('gulp-if');

// Versionamento de ficheiros (cache busting)
var rev = require('gulp-rev');
var revDel = require('rev-del');
var del = require('del');

// Estilos
var sass = require('gulp-sass');
var bulksass = require('gulp-sass-bulk-import');
var cleancss = require('gulp-clean-css');

// Scripts
var uglify = require('gulp-uglify');
var include = require('gulp-include');

// Imagens e sprites
var imagemin = require('gulp-imagemin');
var imageminPngquant = require('imagemin-pngquant');
var imageminMozjpeg = require('imagemin-mozjpeg');
var spritesmith = require('gulp.spritesmith');

// VariÃ¡veis adicionais
var deploy = false;


/**
 * Tasks
 */

// Cleanup styles and scripts build folder
gulp.task('cleanup', function() {

    return del([
        paths.output.resources + '/scripts/**',
        paths.output.resources + '/styles/**'
    ]);

});



// Styles
gulp.task('styles', function() {

    return gulp.src(paths.input.styles + '/[^_]*.scss')
        .pipe(bulksass())
        .pipe(gulpif(!deploy, sourcemaps.init()))
        .pipe(sass({
            includePaths: ['./styles']
        }).on('error', sass.logError))
        .pipe(gulpif(deploy, cleancss()))
        .pipe(rev())
        .pipe(gulpif(!deploy, sourcemaps.write('/sourcemaps')))
        .pipe(gulp.dest(paths.output.styles))
        .pipe(rev.manifest())
        .pipe(revDel({
            force: true,
            dest: paths.output.styles,
            deleteMapExtensions: true
        }))
        .pipe(gulp.dest(paths.output.styles));

});



// Scripts
gulp.task('scripts', function() {

    return gulp.src(paths.input.scripts + '/[^_]*.js')
    //.pipe(gulpif(!deploy, sourcemaps.init()))
        .pipe(include())
        .pipe(gulpif(deploy, uglify()))
        .pipe(rev())
        //.pipe(gulpif(!deploy, sourcemaps.write('/sourcemaps')))
        .pipe(gulp.dest(paths.output.scripts))
        .pipe(rev.manifest())
        .pipe(revDel({
            force: true,
            dest: paths.output.scripts,
            deleteMapExtensions: true
        }))
        .pipe(gulp.dest(paths.output.scripts));

});



// Images
gulp.task('images', function() {
    return gulp.src(paths.input.images + '/**')
        .pipe(imagemin([
            imageminPngquant(),
            imageminMozjpeg({quality: 85})
        ]))
        .pipe(gulp.dest(paths.output.images));
});



// Fonts
gulp.task('fonts', function () {
    return gulp.src(paths.input.fonts + '/**')
        .pipe(gulp.dest(paths.output.fonts));
});



// Sprites
gulp.task('sprites', function(done) {


    // Gera o sprite
    var spriteData = gulp.src(paths.input.sprites + '/*.png')
        .pipe(spritesmith({
            imgName: 'sprite.png',
            cssName: '_sprite.scss',
            imgPath: paths.output.cssimages + '/sprite.png'
        }));

    // Optimiza imagem e guarda-a
    var imgStream = spriteData.img
        .pipe(buffer())
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 7,
            svgoPlugins: [{removeViewBox: false}],
            use: [imgpngquant()]
        }))
        .pipe(gulp.dest(paths.output.sprites));

    // Guarda SCSS com sprites
    var cssStream = spriteData.css
        .pipe(gulp.dest(paths.input.styles));

    done();

});


/**
 * Default/Watch
 */

// Task default, inicia watchers
gulp.task('default', function() {

    // Watcher de styles
    gulp.watch(paths.input.styles + '/**', {usePolling: true}, gulp.series('styles'));

    // Watcher de scripts
    gulp.watch(paths.input.scripts + '/**', {usePolling: true}, gulp.series('scripts'));

    // Watcher de imagens
    gulp.watch(paths.input.images + '/**', {usePolling: true}, gulp.series('images'));

    // Watcher de sprites
    gulp.watch(paths.input.sprites + '/**', {usePolling: true}, gulp.series('sprites'));

    // Watcher de fontes
    gulp.watch(paths.input.fonts + '/**', {usePolling: true}, gulp.series('fonts'));

});

// Deploy
gulp.task('beforeDeploy', gulp.series(function(done){
    deploy = true;
    done();
}, 'cleanup', 'styles', 'scripts'));