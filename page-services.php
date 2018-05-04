<?php get_header(); ?>

<div class="services">
    <div class="services__banner">
        <div class="container">
            <h1>SERVICES</h1>
            <div class="services__body contentHeight">
                <div class="row services__body--heading">
                    <h3>
                        Our Process
                    </h3>
                </div>
                <?php /*
                    if (have_rows('services')):
                     while (have_rows('services')) : the_row(); */?>
                <?php /* $image = get_sub_field('services_image'); */?> 
                <div class="career__body--content">
                    <div class="career__body--left">
                        <p>
                            <?php echo get_post_field('post_content', $post->ID); ?> </p>
                    </div>
                   <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <div class="career__body--right" style="background: url(<?php echo $url; ?>); background-repeat: no-repeat; background-size: cover;">
                    </div>
                </div>
                <?php /* endwhile;
                    else :
                    endif;
                   */ ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>