<?php
get_header();
?>

<style>
  <?php include 'style.css'; ?>
</style>

<div class="page-section">
  <h1 style="text-align: center;">Blog</h1>
  <div class="container">
    <div class="text-center wow fadeInUp">
      <h2 class="title-section">Read Latest News</h2>
      <div class="divider mx-auto"></div>
    </div>

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number
    $args = array(
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged
    );

    $events_query = new WP_Query($args);

    if ($events_query->have_posts()) :
    ?>
      <div class="row">
        <?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
          <div class="col-sm py-3 wow fadeInUp">
            <div class="card-blog">
              <div class="header">
                <img src="<?= setDefaultImageIfEmpty($post) ?>" alt="blog picture" />
              </div>
              <div class="body">
                <h5 class="post-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h5>
                <div class="post-date">Posted on: <?= get_the_date() ?></div>
                <div class="post-content"><?= mb_substr(get_the_content(), 0, 150) ?>...</div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php
        $pagination_args = array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => '?paged=%#%',
          'current' => max(1, $paged),
          'total' => $events_query->max_num_pages,
          'prev_text' => 'Prev',
          'next_text' => 'Next',
          'mid_size' => 2, // Number of links on either side of the current page
          'prev_next' => true, // Show previous and next links
          'type' => 'list' // Display the pagination links as an unordered list
        );

        $pagination_links = paginate_links($pagination_args);
        if ($pagination_links) {
          echo '<ul class="pagination-list">' . $pagination_links . '</ul>';
        }
        ?>
      </div>

    <?php else : ?>
      <p>No posts found</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</div>

<?php
get_footer();
?>
