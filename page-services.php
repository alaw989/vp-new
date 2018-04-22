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
                <?php 
                    if (have_rows('services')):
                     while (have_rows('services')) : the_row(); ?>
                <?php $image = get_sub_field('services_image'); ?>
                <div class="services__row">
                    <div class="services__column column_p">
                        <?php the_sub_field('services_paragraph'); ?>
                    </div>
                    <div class="services__column column_i">
                        <img src="<?php echo $image['url']; ?>">
                    </div>
                </div>
                <?php endwhile;
                    else :
                    endif;
                    ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>