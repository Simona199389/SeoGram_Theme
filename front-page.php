<?php
get_header();
?>

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card-service wow fadeInUp">
          <div class="header">
            <img src="<?= get_template_directory_uri() ?>/img/services/service-1.svg" alt="">
          </div>
          <div class="body">
            <h5 class="text-secondary">SEO Consultancy</h5>
            <p>We help you define your SEO objective & develop a realistic strategy with you</p>
            <a href="service.html" class="btn btn-primary" onclick="return false">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card-service wow fadeInUp">
          <div class="header">
            <img src="<?= get_template_directory_uri() ?>/img/services/service-2.svg" alt="">
          </div>
          <div class="body">
            <h5 class="text-secondary">Content Marketing</h5>
            <p>We help you define your SEO objective & develop a realistic strategy with you</p>
            <a href="service.html" class="btn btn-primary" onclick="return false">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card-service wow fadeInUp">
          <div class="header">
            <img src="<?= get_template_directory_uri() ?>/img/services/service-3.svg" alt="">
          </div>
          <div class="body">
            <h5 class="text-secondary">Keyword Research</h5>
            <p>We help you define your SEO objective & develop a realistic strategy with you</p>
            <a href="#" class="btn btn-primary" onclick="return false">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .container -->
</div> <!-- .page-section -->

<div class="page-section" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 py-3 wow fadeInUp">
        <span class="subhead">About us</span>
        <h2 class="title-section">The number #1 SEO Service Company</h2>
        <div class="divider"></div>

        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
        <a href="about.html" class="btn btn-primary mt-3" onclick="return false">Read More</a>
      </div>
      <div class="col-lg-6 py-3 wow fadeInRight">
        <div class="img-fluid py-3 text-center">
          <img src="<?= get_template_directory_uri() ?>/img/about_frame.png" alt="">
        </div>
      </div>
    </div>
  </div> <!-- .container -->
</div> <!-- .page-section -->

</div>
</div> <!-- .container -->
</div> <!-- .page-section -->

<!-- Banner info -->
<div class="page-section banner-info">
  <div class="wrap bg-image" style="background-image: url(<?= get_template_directory_uri() ?>/img/bg_pattern.svg);">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
          <h2 class="title-section">SEO to Improve Brand <br> Visibility</h2>
          <div class="divider"></div>
          <p>We're an experienced and talented team of passionate consultants who breathe with search engine marketing.</p>

          <ul class="theme-list theme-list-light text-white">
            <li>
              <div class="h5">SEO Content Strategy</div>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
            </li>
            <li>
              <div class="h5">B2B SEO</div>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid text-center">
            <img src="<?= get_template_directory_uri() ?>/img/banner_image_2.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .wrap -->
</div> <!-- .page-section -->

<?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 3, // display 3 posts
  'orderby'        => 'date',
  'order'          => 'DESC'
);

$events = query_posts($args);
?>
<div class="container">
  <div class="text-center wow fadeInUp">
    <br>
    <h2 class="title-section">Blog</h2>

  </div>

  <div class="row">
    <?php for ($i = 0; $i < count($events); $i++) : ?>
      <div class="col-lg-4 py-3 wow fadeInUp">
        <div class="card-blog">
          <div class="header">
            <div class="post-thumb">
              <img src="<?= setDefaultImageIfEmpty($events[$i]) ?>" alt="blog picture" />
            </div>
          </div>
          <div class="body">
            <h5 class="post-title"><a href="<?= get_permalink($events[$i]->ID) ?>"><?= $events[$i]->post_title ?></a></h5>
            <div class="post-date">Posted on: <?= $events[$i]->post_date ?></div>
            <div class="post-content"><?= mb_substr($events[$i]->post_content, 0, 130) ?>...</div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>







  <div class="col-12 mt-4 text-center wow fadeInUp">
    <a href="http://localhost/kp_2/blog" class="btn btn-primary">View More</a>
  </div>
    </br>
</div>
</div>



<?php
get_footer();
?>