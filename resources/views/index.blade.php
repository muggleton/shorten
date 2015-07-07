<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Shorty</title>

	<link rel="stylesheet" href="/assets/css/vendor/loading-bar.css" />
	<link rel="stylesheet" href="/assets/css/main.css" />

	
	 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
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
  					</div>
  				</div>
  				<button type="submit" class="btn btn-default btn-shorten col-xs-4 col-xs-offset-4">Shorten</button>
  			</div>
  		</form>

  		<div ng-cloak ng-hide="!links.length" class="shortened-links">
  			<div class="shortened-link" ng-repeat="link in links">
  				<div class="row">
  					<div class="col-xs-12">
  						<div class="shortened-link-short" select-on-click>
  							<% link.short %>
  						</div>
  						<a href="<% link.long %>" target="new" class="shortened-link-long">
  							<% link.long %>
  						</a>
  						<div class="shortened-link-other">
  							<div class="row">
  								<div class="col-xs-6"><span class="shortened-link-timeago"><% link.created_at | timeAgo %></span></div>
  								<div class="col-xs-6"><a class="shortened-link-delete" href="" ng-click="deleteLink($index)">Delete</a></div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>

  		</div>
  	</div>

  	<script src="/assets/js/vendor/jquery.min.js"></script>
  	<script src="/assets/js/vendor/bootstrap.min.js"></script>
  	<script src="/assets/js/vendor/angular.js"></script>
  	<script src="/assets/js/main.js"></script>
  </body>
  </html>