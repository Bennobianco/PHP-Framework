<?php require __DIR__."/../user/dashboard.php"; ?>


<br /><br />

<div class="container">
  <br />
  <h2>NewPosts.php</h2>

  <p> Schreibe eines Posts</p>
  <?php
    if(!empty($savedSuccess)): ?>
  <p>Der Post wurde erfolgreich gespeichert</p>
  <?php endif; ?>
  <form method="POST" action="post-new">
  <input type="text" name="title" class="panel-title"></input>



  <textarea name = "content"  class="form-control"></textarea>
  <br />
  <input type="submit" value="Neuer Post" class="btn btn-primary"/>
</form>


<a href="post-admin">Back to Postst</a>

</div>
</body>
</html>
