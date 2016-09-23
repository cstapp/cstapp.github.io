/* file: gulpfile.js */

var gulp        = require('gulp'),
    sass        = require('gulp-ruby-sass'),
    $           = require('gulp-load-plugins')(),
    browserSync = require('browser-sync');

gulp.task('default', ['watch']);

var input = 'src/scss/**/*.scss';
var output = 'css';

gulp.task('build-css', function() {
  return sass((input), { sourcemap: true })
    .on('error', sass.logError)
    .pipe($.sourcemaps.write('maps', {
      includeContent: false,
      sourceRoot: 'src/scss'
    }))
    .pipe(gulp.dest(output))
    .pipe(browserSync.reload({stream:true}))
});

gulp.task('imagemin', function() {
  return gulp.src('src/images/*')
    .pipe($.newer('images'))
    .pipe($.imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
    }))
    .pipe(gulp.dest('images'));
});

gulp.task('jade', function () {
  return gulp.src(['src/**/*.jade','!src/templates/**'])
    .pipe($.jade({
      pretty: true
    }))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({stream:true}))
});

gulp.task('browser-sync', function() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});


gulp.task('watch', function() {
  gulp.watch(['src/images/*'], ['imagemin']),
  gulp.watch('src/scss/**/*.scss', ['build-css']),
  gulp.watch(['src/**/*.jade'], ['jade']);
});
gulp.task('start', ['browser-sync', 'watch']);
