<?php get_header(); ?>

<div class="services">
    <div class="services__banner">
        <div class="container">
            <h1>SERVICES</h1>
            <div class="services__body">

                <div class="row">
                    <h3 class="services__body--heading">
                        Our Process
                    </h3>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <?php the_field('services_paragraph_1'); ?>
                    </div>
                    <div class="services__column">
                        <?php echo wp_get_attachment_image(64, 'services_page_image_size'); ?>
                    </div>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <?php echo wp_get_attachment_image(64, 'services_page_image_size'); ?>
                    </div>
                    <div class="services__column">
                        <?php the_field('services_paragraph_2'); ?>
                    </div>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <?php the_field('services_paragraph_3'); ?>
                    </div>
                    <div class="services__column">
                        <?php echo wp_get_attachment_image(64, 'services_page_image_size'); ?>
                    </div>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <?php echo wp_get_attachment_image(64, 'services_page_image_size'); ?>
                    </div>
                    <div class="services__column">
                        <?php the_field('services_paragraph_4'); ?>
                    </div>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <?php the_field('services_paragraph_3'); ?>
                    </div>
                    <div class="services__column">
                        <?php echo wp_get_attachment_image(64, 'services_page_image_size'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>