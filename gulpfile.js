var elixir = require('laravel-elixir');


var paths = {
	'jquery': './resources/assets/bower/jquery/',
	'bootstrap': './resources/assets/bower/bootstrap-sass-official/assets/'
}

elixir(function(mix) {
	mix.sass('app.scss', 'public/assets/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
	.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/assets/fonts')
	.scripts([
		paths.jquery + "dist/jquery.js",
		paths.bootstrap + "javascripts/bootstrap.js"
		], './', 'public/assets/js/app.js');
});