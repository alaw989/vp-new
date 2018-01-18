<footer class="blog-footer">
  <?php /*  <?php if (is_front_page()): ?>
  <div class="form-footer">
    <div class="form-footer__header">
      <h2>Contact Us</h2>

      <?php endif;?>
    </div>
    */ ?>
    <div class="container">
      <img src="/vp/wp-content/uploads/2017/12/vplogowhite.png" />
      <p>&copy;
        <?php echo date('Y'); ?> -
        <?php bloginfo('name'); ?>
      </p>
    </div>

</footer>
<?php wp_footer(); ?>
<!-- jQuery library -->
<script src="<?php echo get_template_directory_uri(); ?>/app/js/jquery-3.2.1.min.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh40YW-P9vuPHcF2UGZbcn60QjmoW9-Q4&callback=initMap" async
  defer></script>

<!-- Slick Carousel -->
<script src="<?php echo get_template_directory_uri(); ?>/app/js/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.subtitle-container').slick({
      autoplay: true,
      fade: true,
      arrows: false,
      speed: 700
    });
  });
</script>

</body>

</html>