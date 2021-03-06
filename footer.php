<footer class="blog-footer">
  <div class="container">
    <div class="blog__footer--copyright">
      <?php $logo = get_field('company_logo', 'option'); ?>
      <img src="<?php echo $logo['url']; ?>" />
      <p>&copy;
        <?php echo date('Y'); ?>
        <?php bloginfo('name'); ?>
      </p>
    </div>
    <div class="nav-container">
      <nav class="nav" id="bs-example-navbar-collapse-1">
        <?php
wp_nav_menu(array(
    'menu' => 'primary',
    'theme_location' => 'primary',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'nav',
    'container_id' => 'bs-example-navbar-collapse-1',
    'menu_class' => 'nav navbar-nav',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new wp_bootstrap_navwalker(), )
);
?>
      </nav>
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
  jQuery(document).ready(function () {
    jQuery('.subtitle-container').slick({
      autoplay: true,
      fade: true,
      arrows: false,
      speed: 700
    });
  });



  function gallerySwitch() {
    const e = document.querySelectorAll('.p_links');
    const f = document.querySelectorAll('.portfolio__gallery');
    const arr = []
    const arr2 = []
    f.forEach((x) => {
      arr.push(x)
      arr2.push(x.id)
    })
    $(arr).hide();
    $(arr[0]).show();
    e.forEach((x) => {
      x.addEventListener('click', showGallery => {
        if (x.id) {
          const joined = 'gallery_' + x.id;
          const final = arr2.indexOf(joined);
          $(arr[final]).fadeIn()
          $(arr).each(function () {
            if (this.id !== joined) {
              $(this).hide();
            }
          })
        }
      })
    });
  }

  gallerySwitch();

  jQuery(document).ready(function () {

    function toggleSidebar() {
      jQuery(".button").toggleClass("active");
      jQuery("main").toggleClass("move-to-left2  ");
      jQuery(".sidebar-item").toggleClass("active");
      jQuery(".sidebar").toggleClass("move-to-left");
    }

    jQuery(".button").on("click tap", function () {
      toggleSidebar();
    });

    jQuery(document).keyup(function (e) {
      if (e.keyCode === 27) {
        toggleSidebar();
      }
    });

  

  const sRow = document.querySelectorAll('.services__row');
  counter = 0;
  sRow.forEach((x) => {
    var a = x.querySelectorAll('.column_p');
    var b = x.querySelectorAll('.column_i');
    counter++;
    x.id = counter;
    if (x.id % 2 == 0) {
      jQuery(a).css("order", 1);
      jQuery(b).css("order", 2);
    }
    const width = jQuery(window).width();
    if (width < 1024) {
      if (x.id % 2 !== 0) {
        console.log(x)
        jQuery(a).css("order", 1);
        jQuery(b).css("order", 2);
      }
    }
  });

    jQuery('.blog-footer').css('margin-top', $('.contentHeight').height());



    
    
  });
</script>

</body>

</html>