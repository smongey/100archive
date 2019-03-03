var gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps"),
    php = require("gulp-connect-php"),
    babel = require("gulp-babel"),
    sassGlob = require("gulp-sass-glob"),
    browserSync = require("browser-sync").create();

var paths = {
    styles: {
        src: "assets/scss/*.scss",
        dest: "assets/css"
    },
    scripts: {
        src: "assets/scripts/*.js",
        dest: "assets/build"
    }
};

// handle scss
function style() {
    return (
        gulp
            .src(paths.styles.src)
            // Initialize sourcemaps before compilation starts
            .pipe(sourcemaps.init())
            .pipe(sassGlob())
            .pipe(sass())
            .on("error", sass.logError)
            // Use postcss with autoprefixer and compress the compiled file using cssnano
            .pipe(postcss([autoprefixer(), cssnano()]))
            // Now add/write the sourcemaps
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.styles.dest))
            // Add browsersync stream pipe after compilation
            .pipe(browserSync.stream())
    );
}

// handle js
function script() {
    return gulp
        .src([
            "node_modules/babel-polyfill/dist/polyfill.js",
            paths.scripts.src
        ])
        .pipe(babel({ presets: ["@babel/env"] }))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(browserSync.stream());
}

// A simple task to reload the page if necessary
function reload() {
    browserSync.reload();
}

// connet server with browersync
gulp.task("connect-sync", function() {
    connect.server({}, function() {
        browserSync({
            proxy: "127.0.0.1:8000"
        });
    });

    gulp.watch("**/*.php").on("change", reload);
});

// Spin up basic php server
function connect() {
    php.server({
        hostname: "127.0.0.1",
        base: ".",
        port: 8000,
        keepalive: true
    });
}

// Add browsersync and start 'watch'
function watch() {
    browserSync.init({
        // You can tell browserSync to use this directory and serve it as a mini-server
        proxy: "127.0.0.1:8000",
        port: 8080
        // If you are already serving your website locally using something like apache
        // You can use the proxy setting to proxy that instead
        // proxy: "yourlocal.dev"
    });
    gulp.watch("assets/scss/**/*", style);
    gulp.watch(paths.scripts.src, script);
    // We should tell gulp which files to watch to trigger the reload
    // This can be html or whatever you're using to develop your website
    // Note -- you can obviously add the path to the Paths object
    //gulp.watch("src/*.html", reload);
    gulp.watch("assets/scss/*.scss").on("change", reload);
    gulp.watch("assets/scripts/*.js").on("change", reload);
    gulp.watch("**/*.php").on("change", reload);
}

// Don't forget to expose the task!
exports.watch = watch;

// Export the tasks to be used on the command line
exports.style = style;
exports.script = script;

// Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
var build = gulp.parallel(style, script, connect, watch);

// Expose tasks if you like
// gulp.task('build', build);

// default task with 'gulp'
gulp.task("default", build);
