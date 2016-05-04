<?php
ini_set('display_errors', 1); // 0 = uit, 1 = aan
	error_reporting(E_ALL);
	session_start();
	require 'functions.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		logIn($_POST['username'], $_POST['password']);
	}

 ?>

<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Re-Sync Admin Login</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<div class="padding-15">

			<div class="login-box">

				<!-- login form -->
				<form action="login.php" method="POST" class="sky-form boxed">
					<header><i class="fa fa-users"></i> Sign In</header>

					<!--
					<div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
						Invalid Email or Password!
					</div>

					<div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
						Account Inactive!
					</div>

					<div class="alert alert-default noborder text-center weight-400 nomargin noradius">
						<strong>Too many failures!</strong> <br />
						Please wait: <span class="inlineCountdown" data-seconds="180"></span>
					</div>
					-->
					<?php
							if ($_SERVER['REQUEST_METHOD'] == 'POST')
	            {
								switch (logIn($_POST['username'], $_POST['password'])) {
									case 'You have too many times tried the wronge username/password. Please wait a few minutes to login':
										echo '<div class="alert alert-default noborder text-center weight-400 nomargin noradius">
														<strong>Too many failures!</strong> <br />
														Please wait: <span class="inlineCountdown" data-seconds="180"></span>
													</div>';
										break;

									case 'invalid username/password. Please try again':
										echo '<div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
														Invalid username or Password. Please try again!
													</div>';
										break;

									case 'please fill in all required information':
										echo '<div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
														please fill in all required information.
													</div>';
										break;

									default:
										# code...
										break;
								}

	            }
	        ?>
					<fieldset>

						<section>
							<label class="label">Username</label>
							<label class="input">
								<i class="icon-append fa fa-envelope"></i>
								<input type="text" name="username" placeholder="Username">
								<span class="tooltip tooltip-top-right">Type your Username</span>
							</label>
						</section>

						<section>
							<label class="label">Password</label>
							<label class="input">
								<i class="icon-append fa fa-lock"></i>
								<input type="password" name="password" placeholder="Password">
								<b class="tooltip tooltip-top-right">Type your Password</b>
							</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Keep me logged in</label>
						</section>

					</fieldset>

					<footer>
						<input type="submit" class="btn btn-primary pull-right" value="Sign In">
						<div class="forgot-password pull-left">
							<a href="page-password.html">Forgot password?</a> <br />
							<a href="page-register.html"><b>Need to Register?</b></a>
						</div>
					</footer>
				</form>
				<!-- /login form -->

				<hr />

				<div class="text-center">
					Or sign in using:
				</div>

				<!-- more buttons: ui-buttons.html -->
				<!-- <div class="socials margin-top-10 text-center">
					<a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
				</div> -->

			</div>

		</div>

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
	</body>
</html>
