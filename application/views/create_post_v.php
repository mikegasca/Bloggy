


<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Nuevas Publicaciones</h1>
      <p class="lead text-muted">Escribe cada palabra como si fuera la última, plasma tu memoria que podría ser tu legado... </p>

    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container ">

        <form method="post" action="/Post/create" name="form_create" id="form_create" enctype="multipart/form-data" >
  			<div class="form-group col-md-6 col-lg-6 col-xs-6">
				<label for="title">Title</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Title " required>
			</div>
  			<div class="form-group col-md-6 col-lg-6 col-xs-6">
				<label for="title">Image</label>
				<input type="file" class="" id="image" name="image" onchange="ValidarImagen(this);" >
			</div>
			<div class="form-group col-md-6 col-lg-6 col-xs-6">
				<label for="textarea">Example textarea</label>
				<textarea class="form-control" id="textarea" name="textarea" rows="8"></textarea>
			</div>

		  	<button class="btn btn-lg btn-primary btn-block" type="submit">Publish</button>

		</form>
    </div>
  </div>

</main>
<script type="text/javascript">
	function ValidarImagen(obj){
    var uploadFile = obj.files[0];

    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif)$/i).test(uploadFile.name)) {
        alert('El archivo a adjuntar no es una imagen');
    }else {
        var img = new Image();
        img.onload = function () {
           if (uploadFile.size > 200000)
            {
                alert('El peso de la imagen no puede exceder los 200kb')
            }
            else {
                alert('Imagen correcta :)')
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }
}
</script>