<?php get_header(); ?>

<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<?php $image_attributes = wp_get_attachment_image_src($attachment_id = 55, $size = 'medium'); ?>



<div class="blog-header">
    <div class="banner-container" style="background-image: url('<?php echo $thumb['0']; ?>'); background-repeat: no-repeat; background-size: cover; ">
        <div class="title-container">
            <?php //masthead title widget
    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box3')): ?>
            <?php endif; ?>

            <div class="subtitle-container">
                <h3>
                    <span>STRUCTURAL ENGINEERING <br>AND <br>STEEL DETAILING</span>
                </h3>
                <h3>
                    <span>BUILDING AND <br>INFORMATION MODEL (BIM)</span>
                </h3>
                <h3>
                    <span>EMPLOYING THE LATEST <br>CAD SOFTWARE</span>
                </h3>
                <h3>
                    <span>QUICK RESPONSE</span>
                </h3>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="about-wrap">
        <div class="container">
            <div class="about-header section-header">
                <h2>
                    <span>ABOUT</span> US
                </h2>
            </div>
            <div class="about__content">
                <div class="about__content--image">
                <img src= "<?php echo $image_attributes[0]; ?>">
                </div>
                <div class="about__content--text">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box4')) : ?>
                    <?php endif; ?>
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