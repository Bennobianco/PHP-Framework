<?php include __DIR__."/../layout/header.php"; ?>

<?php
  $numOfPosts = 3;
  $count = 0;
  $limit = 150;

  foreach ($posts as $post):
    if ($count == $numOfPosts){
      break;
    }
?>
<?php if($count == 0) :?>

  <div class="jumbotron bg-img p-4 p-md-5 text-white rounded " style="margin-bottom: 0px;">
  <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?php echo e($post->title); ?></h1>
      <p class="lead my-3"><?php echo shortContent(e($post->content), $limit);?></p>
      <p class="lead mb-0"><a href="post?id=<?php echo e($post->id); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
  </div>
</div>
  <blockquote class="blockquote mt-0">
      <footer class="blockquote-footer">Bild von
        <a href="https://pixabay.com/de/users/ColiN00B-346653/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1348079"
        >Colin Behrens</a> auf
        <a href="https://pixabay.com/de/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1348079">Pixabay</a>
    </footer>
  </blockquote>
  <?php  $count++;?>
<div class="row mb-2">
<?php else: ?>

<?php $count++;?>

  <div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0"><?php echo e($post->title); ?></h3>
        <div class="mb-1 text-muted"><?php
          $date = new DateTime($post->created_at);
          echo $date->format('d.F Y')."<br />";
        ?>
        </div>
        <p class="card-text mb-auto"><?php echo shortContent(e($post->content), $limit);?></p>
        <a href="post?id=<?php echo e($post->id); ?>" class="stretched-link">Continue reading</a>
      </div>

    </div>
  </div>

<?php endif ?>
<?php endforeach ?>

</div>
</div>

<main role="main" class="container">
   <div class="row">
     <div class="col-md-8 blog-main">
       <h3 class="pb-4 mb-4 font-italic border-bottom">
         From the Firehose
       </h3>

       <div class="blog-post">
         <h2 class="blog-post-title">Zitate</h2>
         <p class="blog-post-meta">Dezember 22, 2019 by <a href="#">Bennobianco</a></p>

         <blockquote class="blockquote">
           <p>"Philipp ist cool"</p>
            <footer class="blockquote-footer">SuperMum</footer>
            <hr>
           <p>"Zwei Dinge sind unendlich, das Universum und die menschliche Dummheit.
           Aber beim Universum bin ich mir noch nicht ganz sicher."</p>
            <footer class="blockquote-footer">Alber Einstein</footer>
           <hr>
           <p>"Ich fühle eindeutig <strong>aggressive</strong> Tendenzen!"</p>
            <footer class="blockquote-footer">Worf</footer>
         </blockquote>

       </div><!-- /.blog-post -->


       <nav class="blog-pagination">
         <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">More</a>
       </nav>

     </div><!-- /.blog-main -->

     <aside class="col-md-4 blog-sidebar">
       <div class="p-4 mb-3 bg-light rounded">
         <h4 class="font-italic">Über</h4>
         <p class="mb-0">Dies ist ein Blog <em>über alles </em> was die Welt <em>so interessiert.</em> Und Dinge die ihr noch nie wissen wolltet. Lest es mit Humor
         and <i class='fas fa-hand-spock' style='font-size:24px'></i>
         live long and prosper.</p>
       </div>

       <div class="p-4">
         <h4 class="font-italic">Archives</h4>
         <ol class="list-unstyled mb-0">
           <li><a href="/blog/public/index.php/archive">alle Blogs</a></li>
         </ol>
       </div>

       <div class="p-4">
         <h4 class="font-italic">Elsewhere</h4>
         <ol class="list-unstyled">
           <li><a href="https://github.com/Bennobianco/PHP-Framework">GitHub</a></li>
         </ol>
       </div>
     </aside><!-- /.blog-sidebar -->

   </div><!-- /.row -->

 </main><!-- /.container -->




<?php include "../views/layout/footer.php"?>
