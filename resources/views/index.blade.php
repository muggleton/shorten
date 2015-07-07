<!DOCTYPE html>
<head>
	<title>Shorty</title>
	<link rel="stylesheet" href="/assets/css/vendor/loading-bar.css" />
	<link rel="stylesheet" href="/assets/css/main.css" />
</head>
<body>

	<div ng-app="shortyApp" ng-controller="linksController" class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Shorty<span class="green">.</span></h1>
			</div>
		</div>
		<form class="url-form-container" ng-submit="shortenLink()">
			<div class="row">
				<div class="col-xs-12">
					<input type="text" class="form-control url-input" ng-model="link.url" placeholder="http://www.example.com" required/>
					
					<div class="alert alert-danger error" ng-cloak ng-show="error">
						<% error %>
					</p>
				</div>
				<button type="submit" class="btn btn-default btn-shorten col-xs-4 col-xs-offset-4">Shorten</button>
			</div>
		</form>

		<div ng-cloak ng-hide="!links.length" class="recently-shortened-container">
			<div class="row">
				<div class="col-xs-12"><h3>Your recently shortened links</h3></div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<table class="table table-striped">
						<tr ng-repeat='link in links'>
							<td><% link.short %></td>
							<td><% link.long %></td>
							<td><a href="" ng-click="deleteLink($index)">Delete</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script src="/assets/js/vendor/jquery.min.js"></script>
	<script src="/assets/js/vendor/bootstrap.min.js"></script>
	<script src="/assets/js/vendor/angular.js"></script>
	<script src="/assets/js/main.js"></script>
</body>