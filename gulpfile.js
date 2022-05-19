const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

function css() {
    return src('./src/css/**/*.scss', { sourcemaps: true })
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCSS())
        .pipe(dest('./'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function browser() {
    browserSync.init({
        proxy: 'http://spro-wp.local/',
        files: [
            '**/*.php'
        ]
    });

    watch('src/css/sass/**/*.scss', css).on('change', browserSync.reload);
}

exports.css = css;
exports.default = browser;