<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	 <link href="/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <meta name="theme-color" content="#563d7c">


    <!-- Custom styles for this template -->
    <link href="/assets/css/login.css" rel="stylesheet">

</head>
<body class="text-center">
	<div class="container">
    	<div class="form-container flip" align="center">

			<form class="col-md-9 col-lg-9 col-xs-12 login-form">
		  		<img class="col-md-12 col-lg-9 col-xs-12" src="/assets/imagenes/logo.png" alt="" width="100%" >
		  		<label for="inputEmail" class="sr-only">Email address</label>
		  		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		  		<label for="inputPassword" class="sr-only">Password</label>
		  		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			  	<div class="checkbox ">
				    <label>
				      	<input type="checkbox" value="remember-me"> Remember me
				    </label>
				</div>
			  	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

				<div style="border: black; margin-top: 20px; border-color: #e5e5e5;">
					<label>
				      	Sign in with
				    </label>
				    <div class="col-md-6 col-lg-5 col-xs-3">
				    	<a class="btn d-flex align-items-center omniauth-btn text-rigth oauth-login " id="oauth-login-google_oauth2"
							rel="nofollow" data-method="post" href="/users/auth/google_oauth2" style="background-color: #fff;   border: 1px solid;" >
							<img alt="Google" width="30px;" title="Sign in with Google" class="js-lazy-loaded qa-js-lazy-loaded" src="/assets/imagenes/google.png">
							<span>
								Google
							</span>
						</a>
				    </div>


				</div>

			</form>
		</div>
	</div>
</body>
</html>