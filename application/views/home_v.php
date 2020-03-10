


<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Ultimas Publicaciones</h1>
      <p class="lead text-muted">Cada uno de los articulos aqui presentados, forman parte de un cumulo de conocimiento adquerido por los escritores </p>

    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php foreach($posts as $post ){ ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <?php if(!empty($post['image'])){ $image=$post['image']; }else{ $image='logo.png'; }?>
              <?php if(!empty($post['coments'])){ $coments=$post['coments']; }else{ $coments=0; }?>
              <?php if(!empty($post['usuario'])){ $usuario=$post['usuario']; }else{ $usuario='Anonymous'; }?>
              <a href="/Post/view/<?php echo $post['id']; ?>">
                <image class="bd-placeholder-img card-img-top" width="100%" height="225" src="/assets/imagenes/post/<?php echo $post['image']; ?>" role="img">
              </a>
              <div class="card-body">
                <p class="card-text"><?php echo $post['title']; ?>    <small class="text-muted">Written by: <?php echo $usuario; ?></small></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                     <small class="text-muted">Coments <?php echo $coments; ?></small>
                  </div>
                  <small class="text-muted"><?php echo $post['created_at']; ?></small>

                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>

</main>