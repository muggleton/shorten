var elixir = require('laravel-elixir');


var paths = {
	'jquery': './resources/assets/bower/jquery/',
	'bootstrap': './resources/assets/bower/bootstrap-sass-official/assets/',
	'angular': './resources/assets/bower/angular/',
}

elixir(function(mix) {
	mix.sass('main.scss', 'public/assets/css/main.css', {includePaths: [paths.bootstrap + 'stylesheets/']})
	.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/assets/fonts/bootstrap')
	.copy(paths.jquery + 'dist/jquery.min.js', 'public/assets/js/vendor/jquery.min.js')
	.copy(paths.bootstrap +  'javascripts/bootstrap.min.js', 'public/assets/js/vendor/bootstrap.min.js')
	.copy(paths.angular + 'angular.min.js', 'public/assets/js/vendor/angular.min.js')
	.scripts(['main.js'], 'public/assets/js/main.js')
});
