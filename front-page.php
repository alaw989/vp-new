<?php get_header(); ?>

<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<?php $image_attributes = wp_get_attachment_image_src($attachment_id = 55, $size = 'content_thumb'); ?>





<?php putRevSlider('home_slider', 'homepage'); ?>


<section>
    <div class="about-wrap">
        <div class="container">
            <div class="about__content">
                <div class="about-header section-header">
                    <h2>
                        <span>ABOUT</span> US</h2>
                </div>
                <div class="about__content--text">
                    <?php echo get_post_field('post_content', $post->ID); ?>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="services-wrap">
        <div class="container">
            <div class="services-header section-header">
                <h2>
                    <span>QUALITY </span>SERVICES
                </h2>
                <?php /*<p>Our firm's strongest in-house areas of specialization are as follows</p> */ ?>
            </div>
            <div class="services__content">
                <div class="services-container">
                    <?php //Home Page Widget Start
    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box1')): ?>
                    <?php endif; ?>
                </div>
                <div class="services-container">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box2')) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <a href="<?php echo get_page_link(17); ?>" class="button">LEARN MORE</a>
    </div>
</section>

<section class="imagerow">
    <div class="container">
        <div class="imagerow__header section-header">
            <h2>OUR
                <span>CLIENTS</span>
            </h2>
        </div>
        <div class="imagerow__content">
            <img src="http://via.placeholder.com/150x150">
            <img src="http://via.placeholder.com/150x150">
            <img src="http://via.placeholder.com/150x150">
            <img src="http://via.placeholder.com/150x150">
            <img src="http://via.placeholder.com/150x150">
        </div>
    </div>
</section>



<section>
    <div id="contact__map"></div>
</section>
<?php get_footer(); ?>