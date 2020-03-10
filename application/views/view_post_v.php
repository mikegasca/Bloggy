<main role="main" class="container " style="padding-top: 70px;">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        .blod Posts
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title"> <?php echo $posts[0]['title'];?></h2>
        <p class="blog-post-meta"><?php echo $posts[0]['created_at'];?> By <?php echo $posts[0]['usuario'];?></p>
        <image class="bd-placeholder-img card-img-top" height="100%" src="/assets/imagenes/post/<?php echo $posts[0]['image']; ?>" role="img">
        <p style="text-align: justify;"> <?php echo $posts[0]['content'];?></p>
      </div><!-- /.blog-post -->
      <hr>
      <div class="form-group col-md-6 col-lg-9 col-xs-6">
        <label for="">Last Comments</label>
        <?php for($i=0; $i<sizeof($comments); $i++){?>
          <div class="card" style="margin-bottom: 10px;">
            <div class="card-header" style="padding-bottom: 5px; padding-top: 5px;">
              <label class="col-md-6 col-lg-6 col-xs-6"  style="text-align: left;"><?php echo $comments[$i]['usuario'];?></label><label class="col-md-6 col-lg-6 col-xs-6" style="text-align: right;"><small><?php echo $comments[$i]['created_at'];?></small></label>
            </div>
            <div class="card-body" style="padding-bottom: 10px; padding-top: 10px">
              <p class="card-text"><?php echo $comments[$i]['comment'];?></p>
            </div>
          </div>
        <?php } ?>

      </div>

      <div class="form-group col-md-6 col-lg-9 col-xs-6">
        <form method="post" action="/Post/comment" name="form_comment" id="form_comment" enctype="multipart/form-data" >
          <label for="textarea">Comment on the post</label>
          <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
          <input type="hidden" name="post_id" id="post_id" value="<?php echo $posts[0]['id'];?>">
          <div class="form-group col-md-6 col-lg-4 col-xs-6" style="padding-left: 0px; padding-top: 15px;">

            <button class="btn btn-lg btn-primary btn-block" type="button" onclick="Comment()">Comment</button>
          </div>
        </form>
      </div>


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Acerca de</h4>
        <p class="mb-0 text-justify">Todos los Post son ideas o pensamientos de los autores y el blog no influye sobre el tema expuesto.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Ultimos Posts </h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">Enero 2020</a></li>
          <li><a href="#">Febrero 2020</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
<script type="text/javascript">
  function Comment() {
    var comment =$('#comment').val();
    if(comment.length > 10 )
    {
       document.getElementById("form_comment").submit();
    }else{
        alert("The comment must have more than 10 characters");
    }
  }

</script>