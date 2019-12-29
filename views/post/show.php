<?php include __DIR__."/../layout/header.php"; ?>


<br /><br />


  <br />
  <h2>Post.php</h2>
  <p class="lead">Das hier ist die Postseite des Blogs.</p>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><?php echo e($post->title); ?></h3>
    </div>
    <div class="panel-body">
      <?php echo nl2br(e($post->content)); ?>
    </div>
  </div>
  <br />
<h5> Kommentare </h5>
<ul class="list-group">
  <?php foreach ($comments as $comment):  ?>
    <li class="list-group-item">
      <?php echo e($comment->content); ?>
    </li>
  <?php endforeach; ?>
</ul>
<br /><br />
  <p> Schreibe einen Komentar</p>
  <form method="post" action="post?id=<?php echo e($post['id']); ?>">
  <textarea name = "content"  class="form-control"></textarea>
  <br />
  <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary"/>
</from>

<br /><br />
</div>

<?php include "../views/layout/footer.php"?>
