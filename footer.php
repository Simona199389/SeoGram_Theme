<style>
  <?php include 'style.css'; ?>
</style>

<footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-3 py-3">
        <h3>SEOGram</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

        <div class="social-media-button">
          <a href="#"><span class="mai-logo-facebook-f"></span></a>
          <a href="#"><span class="mai-logo-twitter"></span></a>
          <a href="#"><span class="mai-logo-google-plus-g"></span></a>
          <a href="#"><span class="mai-logo-instagram"></span></a>
          <a href="#"><span class="mai-logo-youtube"></span></a>
        </div>
      </div>

      <div class="col-lg-3 py-3">
        <h5>Company</h5>
        <?php
          $settings = [
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-menu',
          ];

          wp_nav_menu($settings);
        ?>
      </div>

      <div class="col-lg-3 py-3">
        <h5>Contact Us</h5>
        <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
        <a href="#" class="footer-link">+00 1122 3344 5566</a>
        <a href="#" class="footer-link">seogram@temporary.com</a>
      </div>
      <div class="col-lg-3 py-3">
        <h5>Newsletter</h5>
        <p>Get updates, news, or events on your mail.</p>
        <form action="#">
          <input type="text" class="form-control" placeholder="Enter your email..">
          <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
        </form>
      </div>
    </div>

    <p class="text-center" id="copyright">
      Copyright &copy; 2020.
      This template design and developed by <a href="https://macodeid.com/" target="_blank">MACode ID</a>
    </p>
  </div>
</footer>

<script src="<?=get_template_directory_uri()?>/js/jquery-3.5.1.min.js"></script>

<script src="<?=get_template_directory_uri()?>/js/bootstrap.bundle.min.js"></script>

<script src="<?=get_template_directory_uri()?>/js/google-maps.js"></script>

<script src="<?=get_template_directory_uri()?>/vendor/wow/wow.min.js"></script>

<script src="<?=get_template_directory_uri()?>/js/theme.js"></script>

<?php
  wp_footer();
?>
  
</body>
</html>
