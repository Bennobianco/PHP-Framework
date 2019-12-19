<?php require __DIR__."/../user/dashboard.php"; ?>


<br /><br />

<div class="container">
  <br />
  <h2>PostEdit.php</h2>
  <p class="lead">editiere die Blogs.</p>
  <?php
    if(!empty($savedSuccess)): ?>
  <p>Der Post wurde erfolgreich gespeichert</p>
  <?php endif; ?>

  <form method="POST" action="post-edit?id=<?php echo e($post['id']); ?>">
    <div class"panel panel-default">
      <div class="panel-heading">
        <input type="text" name="title" class="panel-title" value="<?php echo e($post->title); ?>"</input>
      </div>
      <div class="panel-body">
        <textarea name = "content"  class="form-control"><?php echo e($post->content); ?></textarea>
      </div>
    <br />
    <input type="submit" value="Post speichern" class="btn btn-primary"/>
  </from>
  <ul>
    <li>
      <a href="post-admin">
        Posts verwalten
      </a>
    </li>
  </ul>
</div>

<br /><br />

</div>
<?php include "../views/layout/footer.php"?>
