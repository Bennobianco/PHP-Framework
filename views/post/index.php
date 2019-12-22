<?php include __DIR__."/../layout/header.php"; ?>

<?php
  $numOfPosts = 3;
  $count = 0;

  foreach ($posts as $post):
    if ($count == $numOfPosts){
      break;
    }
?>
<?php if($count == 0) :?>
  
  <div class="jumbotron bg-img p-4 p-md-5 text-white rounded " style="margin-bottom: 0px;">
  <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?php echo e($post->title); ?></h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
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
        <p class="card-text mb-auto"><?php $limit = 100; echo shortContent(e($post->content), $limit);?></p>
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




<?php include "../views/layout/footer.php"?>
