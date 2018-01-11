<footer class="blog-footer">
  <?php if (is_front_page()) : ?>
  <div class="form-footer">
    <div class="form-footer__header">
      <h2>Contact Us</h2>
      <div id="wufoo-zn0znsn0uaxox1">
        Fill out my
        <a href="https://vphan.wufoo.com/forms/zn0znsn0uaxox1">online form</a>.
      </div>
      <script type="text/javascript">
        var zn0znsn0uaxox1;
        (function (d, t) {
          var s = d.createElement(t),
            options = {
              'userName': 'vphan',
              'formHash': 'zn0znsn0uaxox1',
              'autoResize': true,
              'height': '921',
              'async': true,
              'host': 'wufoo.com',
              'header': 'show',
              'ssl': true
            };
          s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
          s.onload = s.onreadystatechange = function () {
            var rs = this.readyState;
            if (rs)
              if (rs != 'complete')
                if (rs != 'loaded') return;
            try {
              zn0znsn0uaxox1 = new WufooForm();
              zn0znsn0uaxox1.initialize(options);
              zn0znsn0uaxox1.display();
            } catch (e) {}
          };
          var scr = d.getElementsByTagName(t)[0],
            par = scr.parentNode;
          par.insertBefore(s, scr);
        })(document, 'script');
      </script>

    </div>
    <?php endif; ?>
  </div>
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