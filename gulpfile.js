//NOTE: Some ideas: compress HTML?

// COMMENT: Include plugins
const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const gulpNewer = require('gulp-newer');
const log = require('fancy-log');
const color = require('gulp-color');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const concat_value = 'main.js';
const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');

const post_css_plugins = [
    tailwindcss('tailwind.config.js'),
    autoprefixer({
        overrideBrowserslist: 'last 4 versions',
        supports: false,
        flexbox: "no-2009",
        grid: "autoplace"
    })
];

// COMMENT: Set paths of directories
const paths = {
    scripts: '_input/js/**/*.js',
    scripts_output: '_output/js',

    sass_main: '_input/css/main.scss',
    sass_all: '_input/css/**/*.scss',
    sass_output: '_output/css',

    fonts: '_input/fonts/*.{otf,eot,svg,woff,woff2}', // This allows 1 subfoler. 
    fonts_output: '_output/fonts',

    images: '_input/img/**/*.{gif,jpg,png,svg}', // This allows 1 subfoler. 
    images_output: '_output/img'
};

// COMMENT: Fonts
gulp.task('fonts', () =>
    gulp.src(paths.fonts)
    .pipe(plumber())
    .pipe(gulpNewer(paths.fonts_output)) //If the image is newer than the current image (to stop compressing all)
    .pipe(gulp.dest(paths.fonts_output))
    .on('end', () => {
        log.info(color('Fonts(s) have been moved.', 'GREEN'));
    })
);

// COMMENT: Compressing images
gulp.task('images', () =>
    gulp.src(paths.images)
    .pipe(plumber())
    .pipe(gulpNewer(paths.images_output)) //If the image is newer than the current image (to stop compressing all)
    .pipe(imagemin())
    .pipe(gulp.dest(paths.images_output))
    .on('end', () => {
        log.info(color('Image(s) have been compressed.', 'GREEN'));
    })
);

// COMMENT: Concatenate & Minify JS
gulp.task('scripts', function () {
    let scriptSuccess = true; // Set to true, if an error occurs, this will change to false and stop the end message displaying success.
    //    return gulp.src([paths.scripts], {
    return gulp.src([
            '_input/js/libs/micromodal.min.js',
            '_input/js/libs/slick.min.js',
            '_input/js/tide.js',
            '_input/js/slider.js',
            '_input/js/modals.js',
        ], {
            emitCompileError: true // This is needed to allow custom messaging
        })
        .pipe(plumber())
        .pipe(concat(concat_value))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .on('error', function () {
            log.info(color('Error compiling JS', 'RED'));
            scriptSuccess = false;
        })

        .pipe(gulp.dest(paths.scripts_output))
        .on('end', () => {
            if (scriptSuccess)
                log.info(color('Compiled scripts.', 'GREEN'));
        });
});

gulp.task('sass', function () {
    return gulp.src(paths.sass_main)
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(gulp.dest(paths.sass_output));
});

gulp.task('css', function () {
    const postcss = require('gulp-postcss')

    return gulp.src('_output/css/main.css')
        .pipe(postcss(post_css_plugins))

        // .pipe(plumber())
        // .pipe(concat('main.css'))
        // .pipe(rename({
        //    suffix: '.min'
        // }))
        .pipe(gulp.dest('_output/css'))

})


// COMMENT: Watch for changes on JS/SASS/Images
gulp.task('watch', function () {
    // gulp.watch(paths.sass_all, gulp.series('sass'));
    gulp.watch(paths.sass_all, gulp.series('sass', 'css'));
    gulp.watch(paths.fonts, gulp.series('fonts'));
    gulp.watch(paths.scripts, gulp.series('scripts'));
    gulp.watch(paths.images, gulp.series('images'));
});


// COMMENT: Running all the above tasks
gulp.task('default', gulp.series('sass', 'css', 'fonts', 'scripts', 'images'));