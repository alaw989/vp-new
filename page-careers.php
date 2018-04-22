<?php get_header(); ?>

<div class="career">
    <div class="career__banner">
        <div class="container">
            <h1>CAREERS</h1>
            <div class="career__body contentHeight ">
                <div class="row career__body--heading">
                    <h3>Join Our Team</h3>
                </div>
                <div class="career__body--content">
                    <div class="career__body--left">
                        <p>
                            <?php echo get_post_field('post_content', $post->ID); ?> </p>
                    </div>
                   <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <div class="career__body--right" style="background: url(<?php echo $url; ?>); background-repeat: no-repeat; background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>