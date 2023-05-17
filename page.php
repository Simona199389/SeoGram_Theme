<?php
get_header();
the_post();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2>
        <a href="#" onclick="return false;"><?= get_the_title() ?></a>
      </h2>
      <?= get_the_post_thumbnail() ?>
      <div>
        <?= get_the_content() ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php
      dynamic_sidebar('sidebar');
      ?>
    </div>
  </div>
</div>

<?php
get_footer();
?>
