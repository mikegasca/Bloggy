<link href="/assets/css/login.css" rel="stylesheet">
<div class="container">
	<div class="form-container flip" align="center">

		<form class="col-md-9 col-lg-9 col-xs-12 login-form" method="post" action="/Login/create" name="form_create" id="form_create">
	  		<img class="col-md-12 col-lg-9 col-xs-12" src="/assets/imagenes/logo.png" alt="" width="100%" >
	  		<h4>New user registration</h4> <hr>

	  		<div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rol" class="control-label ">Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name"  required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="descripcion" class="control-label">Email *</label>
                         <input type="email" id="email" name="email" class="form-control" name="descripcion" placeholder="correo@gmail.com"  required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="descripcion" class="control-label">Password *</label>
                         <input type="password" id="password" name="password" class="form-control" name="descripcion" placeholder="Password"  required>
                    </div>
                </div>

            </div>

		  	<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>



		</form>
	</div>
</div>
