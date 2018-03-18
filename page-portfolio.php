<?php get_header(); ?>

<div class="portfolio">
    <div class="portfolio__banner">
        <div class="container">
            <h1>OUR WORK</h1>
            <div class="portfolio__body">
                <div class="row portfolio__body--heading">
                    <h3>View Our Portfolio</h3>
                </div>
                <div class="portfolio__body--content">

                    <?php
                $args = array('post_type' => 'gallery');
                    $query = new WP_Query($args);
                    ?>
                        <div class="portfolio__links">
                            <ul>
                                <?php
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                        $query->the_post(); ?>
                                    <li class="p_links" id="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </li> 
                                    <?php endwhile;
                        else :
                        endif;
                        wp_reset_postdata();
                        ?>
                            </ul>
                        </div>


                        <div class="portfolio__wrapper">
                            <?php
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                        $query->the_post(); ?>
                                <div class="portfolio__gallery" id="gallery_<?php the_title(); ?>">
                                    <?php the_content(); ?>
                                </div>
                                <?php endwhile;
                        else :
                        endif;
                        wp_reset_postdata();
                        ?>
                        </div>

                        <?php /*  <div class="portfolio__wrapper">
                            <div class="portfolio__gallery" id="gallery_industrial">
                                <?php echo do_shortcode('[foogallery id="105"]'); ?>
                </div>
                <div class="portfolio__gallery" id="gallery_bridges">
                    <?php echo do_shortcode('[foogallery id="112"]'); ?>
                </div>
                <div class="portfolio__gallery" id="gallery_commercial">
                    <?php echo do_shortcode('[foogallery id="113"]'); ?>
                </div>
                <div class="portfolio__gallery" id="gallery_misc">
                    <?php echo do_shortcode('[foogallery id="114"]'); ?>
                </div>
            </div> --> */ ?>
        </div>
    </div>
</div>
</div>
</div>

<?php get_footer(); ?>