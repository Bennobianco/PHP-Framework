<?php include __DIR__."/../layout/header.php"; ?>

<?php
// Function to create read more link of a content with link to full page
function readMore($content, $limit, $id) {
  $content = substr($content,0,$limit);
  $content = substr($content,0,strrpos($content,' '));
  $content = $content." <a href='post?id=$id'>Read More...</a>";
  return $content;
}
?>

<br /><br /><br /><br />

<div class="container">
  <h1 class="display-4">MixxedBlog</h1>
  <p class="lead">Das hier ist die Startseite des Blogs.</p>

 <?php foreach ($posts as $post): ?>
  <div class="card">
    <div class="card-body">
     <h4 class="card-title"><?php echo e($post->title); ?></h4>
     <p class="card-text">
      <?php
        $limit = 100;
        echo readMore (e($post->content), $limit, $post->id);?>
    </p>
    <a href="post?id=<?php echo e($post->id); ?>">
     <class="card-link">Read More... </a>
    <p class="font-italic">Posted on
      <?php
        $date = new DateTime($post->created_at);
        echo $date->format('d.F Y')."<br />";
        //echo (e($post->created_at)); ?>
    </p>

   </div>
 </div>
 <br />
   <?php endforeach ?>
</div>
<?php include "../views/layout/footer.php"?>
