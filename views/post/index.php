<?php include __DIR__."/../layout/header.php"; ?>

<?php
  $numOfPosts = 3;
  $count = 0;
  $limit = 100;

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
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
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
         <h2 class="blog-post-title">Sample blog post</h2>
         <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

         <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
         <hr>
         <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
         <blockquote>
           <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
         </blockquote>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         <h2>Heading</h2>
         <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
         <h3>Sub-heading</h3>
         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
         <pre><code>Example code block</code></pre>
         <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
         <h3>Sub-heading</h3>
         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
         <ul>
           <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
           <li>Donec id elit non mi porta gravida at eget metus.</li>
           <li>Nulla vitae elit libero, a pharetra augue.</li>
         </ul>
         <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
         <ol>
           <li>Vestibulum id ligula porta felis euismod semper.</li>
           <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
           <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
         </ol>
         <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
       </div><!-- /.blog-post -->

       <div class="blog-post">
         <h2 class="blog-post-title">Another blog post</h2>
         <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

         <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
         <blockquote>
           <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
         </blockquote>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
       </div><!-- /.blog-post -->

       <div class="blog-post">
         <h2 class="blog-post-title">New feature</h2>
         <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
         <ul>
           <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
           <li>Donec id elit non mi porta gravida at eget metus.</li>
           <li>Nulla vitae elit libero, a pharetra augue.</li>
         </ul>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
       </div><!-- /.blog-post -->

       <nav class="blog-pagination">
         <a class="btn btn-outline-primary" href="#">Older</a>
         <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
       </nav>

     </div><!-- /.blog-main -->

     <aside class="col-md-4 blog-sidebar">
       <div class="p-4 mb-3 bg-light rounded">
         <h4 class="font-italic">Über</h4>
         <p class="mb-0">Dies ist ein Blog <em>über alles </em> was die Welt <em>so interessiert.</em> Und Dinge die du noch nie wissen wolltest. Lest es mit Humor
         und nemmt den Blog nicht allzu ernst.</p>
       </div>

       <div class="p-4">
         <h4 class="font-italic">Archives</h4>
         <ol class="list-unstyled mb-0">
           <li><a href="#">Dezember 2019</a></li>
         </ol>
       </div>

       <div class="p-4">
         <h4 class="font-italic">Elsewhere</h4>
         <ol class="list-unstyled">
           <li><a href="https://github.com/Bennobianco/PHP-Framework">GitHub</a></li>
           <li><a href="#">Twitter</a></li>
           <li><a href="#">Facebook</a></li>
         </ol>
       </div>
     </aside><!-- /.blog-sidebar -->

   </div><!-- /.row -->

 </main><!-- /.container -->




<?php include "../views/layout/footer.php"?>
