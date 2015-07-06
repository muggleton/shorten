<!DOCTYPE html>
<head>
	<title>Shorty</title>
	<link rel="stylesheet" href="/assets/css/main.css" />
</head>
<body>

	<div ng-app="shortyApp" class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Shorty<span class="green">.</span></h1>
			</div>
		</div>
		<div class="url-form-container">
			<div class="row">
				<div class="col-xs-12">
					<input type="text" class="form-control url-input" placeholder="http://www.example.com" />
				</div>
				<button ng-click="shortenUrl()" class="btn btn-default btn-shorten col-xs-4 col-xs-offset-4">Shorten</button>
			</div>
		</div>

		<div class="recently-shortened-container">
			<div class="row">
				<div class="col-xs-12"><h3>Your recently shortened links</h3></div>
			</div>
		</div>
	</div>

	<script src="/assets/js/vendor/jquery.min.js"></script>
	<script src="/assets/js/vendor/bootstrap.min.js"></script>
	<script src="/assets/js/vendor/angular.min.js"></script>
	<script src="/assets/js/main.js"></script>
</body>