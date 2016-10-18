	var gulp = require('gulp'),
	watch = require('gulp-watch'),
	browserSync = require('browser-sync').create(),
	postcss = require('gulp-postcss'),
	mixins = require('postcss-mixins'),
	autoprefixer = require('autoprefixer'),
	cssvars = require('postcss-simple-vars'),
	nested = require('postcss-nested'),
	imports = require('postcss-import');
	


	gulp.task('watch', function() {
		
		browserSync.init({
			browser: "chrome",
			proxy: "localhost/charltondriving_2015"
		}),

		watch('./**/*.php', function() {
			gulp.start('html');
		});

		watch('./css-2016/**/*.css', function() {
			gulp.start('cssInject');
		});

	});

	// process stylesheets
	gulp.task('styles', function() {
		// pipe css files through processor to temp folder which will be linked via html
		return gulp.src('./css-2016/styles.css')
			.pipe(postcss([imports, mixins, cssvars, nested, autoprefixer]))
			.on('error',function(errorInfo) {
				console.log(errorInfo.toString());
				this.emit('end');
			})
			.pipe(gulp.dest('./css-2016/temp'));
	});


	// reload browser on save to html document
	gulp.task('html', function() {
		browserSync.reload();
	});

	//inject styles 
	gulp.task('cssInject', ['styles'], function() {
		return gulp.src('./css-2016/temp')
		.pipe(browserSync.stream());
	});