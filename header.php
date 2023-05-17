<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title><?=bloginfo('name')?></title>

  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/maicons.css">

  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.css">

  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/vendor/animate/animate.css">

  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/theme.css">

  <?php
  wp_head();
  ?>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg" data-offset="500" style="background-color: <?= get_option('nav_bar_color')?>;" >
      <div class="container">
        <a href="http://localhost/kp_2/" class="navbar-brand">Seo<span class="text-primary" >Gram.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <?php
    $settings = [
      'theme_location' => 'main-menu',
      'container'=>'div',
      'container_class' => 'navbar-collapse collapse',
      'container_id' => 'navbarContent',
      'menu_class' => 'navbar-nav ml-auto',
      'add_li_class'  => 'nav-item'
    ];

    wp_nav_menu($settings);
    ?>
    </nav>


    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4"><?= get_option('home_page_heading')?></h1>
            <p class="text-lg text-grey mb-5"><?= get_option('home_sub_heading')?></p>
            <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="<?=get_template_directory_uri()?>/img/banner_image_1.svg" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>