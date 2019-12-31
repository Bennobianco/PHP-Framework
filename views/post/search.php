<?php include __DIR__ . "/../layout/header.php"; ?>

<br />
<br />
<h3>
  <?php echo 'SEARCH RESULTS 4: "'.$search .'"';
  $limit = 50;
  ?>
</h3>
  <?php foreach ($posts AS $post): ?>

    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <!--<strong class="d-inline-block mb-2 text-primary">World</strong>-->
          <h3 class="mb-0"><?php echo e($post->title); ?></h3>
          <div class="mb-1 text-muted"><?php
            $date = new DateTime($post->created_at);
            echo $date->format('d.F Y')."<br />";
          ?>
          </div>
          <p class="card-text mb-2"><?php echo shortContent(e($post->content), $limit);?></p>
          <a href="post?id=<?php echo e($post->id); ?>" class="stretched-link">Continue reading</a>
        </div>

      </div>
    </div>

  <?php endforeach; ?>

</div><!-- /.blog-id.wrapper from header -->

<?php include __DIR__ . "/../layout/footer.php"; ?>
