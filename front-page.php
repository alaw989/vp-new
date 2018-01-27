<?php get_header(); ?>

<div class="blog-header">
    <div class="banner-container" style="background-image: url('<?php echo header_image(); ?>'); ">
        <div class="title-container">
            <?php //masthead title widget
    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box3')): ?>
            <?php endif; ?>

            <div class="subtitle-container">
                <h3>
                    <span>STRUCTURAL ENGINEERING AND STEEL DETAILING</span>
                </h3>
                <h3>
                    <span>BUILDING AND INFORMATION MODEL (BIM)</span>
                </h3>
                <h3>
                    <span>EMPLOYING THE LATEST CAD SOFTWARE</span>
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
            <div class="about-header">
                <h2 class="about-section__header">
                    <span>ABOUT US</span>
                </h2>
            </div>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Box4')) : ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section>
    <div class="services-wrap">
        <div class="container">
            <div class="services-header">
                <h2>
                    <span>QUALITY </span>SERVICES
                </h2>
                <p>Our firm's strongest in-house areas of specialization are as follows</p>
            </div>
            <div class="services-wrapper">
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

<section>
    <div class="contact">   
        <div class="contact__form">
        </div>
        <div id="contact__map"></div>
    </div>


</section>
<?php get_footer(); ?>