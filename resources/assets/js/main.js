var app = angular.module('shortyApp', ['angular-loading-bar'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});


app.controller('linksController', function($scope, $http) {

	$scope.links = [];
	$scope.loading = false;
	$scope.error = null;

	$scope.init = function() {
		$scope.loading = true;
		
		$http.get('/api/links').
		success(function(data, status, headers, config) {
			$scope.links = data;
			$scope.loading = false;

		})
	}

	$scope.shortenLink = function() {
		$scope.loading = true;

		$http.post('/api/links', {
			url: $scope.link.url,
			done: $scope.links.done
		}).success(function(data, status, headers, config) {
			$scope.links.unshift(data);
			$scope.link = '';
			$scope.loading = false;
			$scope.error = false;
		}).error(function(data) {
			$scope.loading = false;
			$scope.error = data.url[0];
		});
	};


	$scope.deleteLink = function(index) {
		$scope.loading = true;

		var link = $scope.links[index];

		$http.delete('/api/links/' + link.id)
		.success(function() {
			$scope.links.splice(index, 1);
			$scope.loading = false;
			$scope.error = null;

		});;
	};


	$scope.init();

})
.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
	cfpLoadingBarProvider.includeSpinner = false;
}]);