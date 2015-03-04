<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angular Conditional Classes</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">
		.error-message {
			color: red;
		}
	</style>
</head>
<body>
	<div ng-app>
		<form novalidate name="myForm">
			<div class="error-message" ng-show="myForm.username.$dirty && myForm.username.$error.required">The username is required</div>
			<div class="error-message" ng-show="myForm.username.$error.minlength">The username should be more than 2 symbols</div>
			<div class="error-message" ng-show="myForm.username.$error.maxlength">The username should not be more than 15 symbols</div>

			<label for="username">User</label>
			<input type="text" name="username" ng-model="username" ng-minlength="3" ng-maxlength="15" required>
			<br />
			<div class="error-message" ng-show="myForm.email.$invalid">The email is not valid</div>
			<label for="email">Email</label>
			<input type="email" name="email" ng-model="email">
			<br />
			<div class="error-message" ng-show="myForm.password.$dirty && myForm.password.$error.required">The password is required</div>
			<div class="error-message" ng-show="myForm.password.$error.pattern" >The password should containing at least 8 characters, 1 number, 1 upper and 1 lowercase</div>
			<label for="password">Password</label>
			<input type="password" name="password" ng-model="password" ng-pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/" required>
		</form>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script  src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
</body>
</html>