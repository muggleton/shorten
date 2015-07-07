var elixir = require('laravel-elixir');


var paths = {
	'jquery': './resources/assets/bower/jquery/',
	'bootstrap': './resources/assets/bower/bootstrap-sass-official/assets/',
	'angular': './resources/assets/bower/angular/',
	'angular_loading_bar': './resources/assets/bower/angular-loading-bar/src/'
}

elixir(function(mix) {
	mix.sass('main.scss', 'public/assets/css/main.css', {includePaths: [paths.bootstrap + 'stylesheets/']})
	.copy(paths.angular_loading_bar + 'loading-bar.css', 'public/assets/css/vendor/loading-bar.css')
	.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/assets/fonts/bootstrap')
	.copy(paths.jquery + 'dist/jquery.min.js', 'public/assets/js/vendor/jquery.min.js')
	.copy(paths.bootstrap +  'javascripts/bootstrap.min.js', 'public/assets/js/vendor/bootstrap.min.js')
	// Combine angulr and angular related scripts
	.scripts(['angular/angular.js', 'angular-loading-bar/src/loading-bar.js'], 'public/assets/js/vendor/angular.js' ,'resources/assets/bower')
	.scripts(['main.js'], 'public/assets/js/main.js')
});
