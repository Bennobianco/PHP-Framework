<?php include __DIR__."/../layout/header.php"; ?>


<br /><br /><br /><br />

<div class="container">
  <h1 class="display-4">MixxedBlog</h1>
  <p class="lead">Das hier ist die Startseite des Blogs.</p>

 <?php
  $i = 0;
  foreach ($posts as $post):
 ?>
  <div class="card">
    <div class="card-body">
      <?php echo "$i"; $i++;?>
     <h4 class="card-title"><?php echo e($post->title); ?></h4>
     <p class="card-text">
      <?php
        $limit = 100;
        echo shortContent(e($post->content), $limit);?>
    </p>
    <a href="post?id=<?php echo e($post->id); ?>">
     <class="card-link">Read More... </a>
    <p class="font-italic">Posted on
      <?php
        $date = new DateTime($post->created_at);
        echo $date->format('d.F Y')."<br />";
      ?>
    </p>

   </div>
 </div>
 <br />
   <?php endforeach ?>
</div>
<?php include "../views/layout/footer.php"?>
