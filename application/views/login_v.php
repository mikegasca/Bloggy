
	<div class="container">
    	<div class="form-container flip" align="center">
			<form class="col-md-9 col-lg-6 col-xs-12 login-form"  method="post" action="/Login/login" name="form_login" id="form_login">
		  		<img class="col-md-12 col-lg-9 col-xs-12" src="/assets/imagenes/logo.png" alt="" width="100%" >
		  		<?php if(!empty($message)){?>
			  		<div class="alert alert-<?php echo $message_alert; ?>" role="alert">
					  <?php echo $message; ?>
					</div>
				<?php } ?>
				<div class="col-md-12 col-lg-12 col-xs-12 form-group">
			  		<label for="inputEmail" class="sr-only">Email address</label>
			  		<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
			  	</div>
			  	<div class="col-md-12 col-lg-12 col-xs-12 form-group">
				  	<label for="inputPassword" class="sr-only">Password</label>
			  		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
			  	</div>
			  	<div class="checkbox ">
				    <label>
				      	<input type="checkbox" value="remember-me"> Remember me
				    </label>
				</div>
			  	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			  	<label>Don't have an account yet? <a href="/Login/register">Register now</a></label>
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