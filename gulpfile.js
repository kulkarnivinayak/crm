const elixir = require('laravel-elixir');
var gulp	 = require('gulp');


gulp.task('materialize-build', function() {
	gulp.src('./node_modules/materialize-css/dist/css/materialize.min.css').pipe(gulp.dest('./resources/assets/css'));
	gulp.src('./node_modules/jquery/dist/jquery.min.js').pipe(gulp.dest('./resources/assets/js'));
	gulp.src('./node_modules/materialize-css/dist/js/materialize.min.js').pipe(gulp.dest('./resources/assets/js'));
	gulp.src(['./node_modules/materialize-css/dist/fonts/**/*']).pipe(gulp.dest('./resources/assets/fonts'));
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
	mix
	.stylesIn('resources/assets/css', 'public/assets/css/application.css')
	.scriptsIn('resources/assets/js', 'public/assets/js/application.js')
	.version(['assets/css/application.css', 'assets/js/application.js'])
	.copy('resources/assets/fonts', 'public/assets/fonts')
	.copy('resources/assets/images', 'public/assets/images');
});