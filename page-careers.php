<?php get_header(); ?>

<div class="career">
    <div class="career__banner">
        <div class="container">
            <h1>CAREERS</h1>
            <div class="career__body">
                <div class="row career__body--heading">
                    <h3>Join Our Team</h3>
                </div>
                <div class="career__body--content">
                    <div class="career__body--left">
                        <p>
                            <?php echo get_post_field('post_content', $post->ID); ?> </p>
                    </div>
                    <div class="career__body--right">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>