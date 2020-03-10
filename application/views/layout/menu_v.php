<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="/Home">
	    <img src="/assets/imagenes/logo.png" height="30" class="d-inline-block align-top" alt="">
	</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     	<span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      	<ul class="navbar-nav mr-auto">
        	<li class="nav-item active">
          		<a class="nav-link" href="#">Top 10 <span class="sr-only">(current)</span></a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="#">This Month</a>
        	</li>
      	</ul>
       	<div class="col-md-2 col-lg-2 col-xs-2" >
       	  	<label><?php echo $user['name']; ?></label>
          		<a class="btn  btn-outline-dark " href="/Post/new">New Post</a>
       	</div>
      	<form class="form-inline mt-2 mt-md-0">
        	<a class="btn  btn-outline-dark " href="/Login/logout" type="submit">Logout</a>
      	</form>
    </div>
 </nav>
