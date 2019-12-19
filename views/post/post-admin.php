<?php require __DIR__."/../user/dashboard.php";?>

<br /><br />

<div class="container">
  <h1>Admin Seite des Blogs</h1>
  <p class="lead">Edit Blogs.</p>
  <ul>
    <?php foreach ($posts as $post): ?>
      <li>
        <a href="post-edit?id=<?php echo e($post->id); ?>">
          <?php echo e($post->title); ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
<?php include "../views/layout/footer.php"?>
