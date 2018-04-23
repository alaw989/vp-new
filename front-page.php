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
                        <p class="align-right">Placeholder Text</p>
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
                <p> We Have a Wide Range of Capabilities & Areas of Specialization</p>
            </div>
            <div class="services__content">
                <?php if (have_rows('specializations')) : ?>
                <?php while (have_rows('specializations')): the_row(); ?>

                <?php $image = get_sub_field('specialization_background'); ?>

                <div class="services_feature-box" style="background:linear-gradient(0deg,rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(<?php echo $image['url']; ?>);">
                    <p><?php the_sub_field('specialization_text'); ?></p>  
                </div>

                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>


                <?php /*
                <div class="services-container">
                    <div class="services-subheader">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <h3> Areas of Specialization </h3>
                    </div>
                    <div class="text-widget">
                        <?php //Home Page Widget Start
    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box1')): ?>
                <?php endif; ?>
            </div>
            <div class="button-container">
                <a href="<?php echo get_permalink(17); ?>">
                    <button>
                        <p>Learn More</p>
                    </button>
                </a>
            </div>
        </div>
        <div class="services-container">
            <div class="services-subheader">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <h3> Capabilities </h3>
            </div>
            <div class="text-widget">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box2')) : ?>
                <?php endif; ?>
            </div>
            <div class="button-container">
                <a href="<?php echo get_permalink(17); ?>">
                    <button>
                        <p>Learn More</p>
                    </button>
                </a>
            </div>
        </div>
        */ ?>
    </div>
    </div>
    </div>
</section>

<section class="imagerow">
    <div class="container">
        <div class="imagerow__header section-header ">
            <h2 class="color-dark">OUR
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