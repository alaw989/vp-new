<?php get_header(); ?>

<?php $fields = get_fields(17);

$counter = 0; ?>


<div class="services">
    <div class="services__banner">
        <div class="container">
            <h1>SERVICES</h1>
            <div class="services__body">
                <div class="row services__body--heading">
                    <h3>
                        Our Process
                    </h3>
                </div>
                <?php /*if ($fields) : */?>
                <?php /*foreach ($fields as $field) : */?>
                <?php /* ++$counter; */?>
                <?php /*if ($counter % 2 == 0) : */?>
                <div class="services__row">
                    <div class="services__column">
                        <?php the_field('services_paragraph_1'); ?>
                    </div>
                    <div class="services__column">
                        <img src="<?php the_field('services_image_1'); ?>">
                    </div>
                </div>
                <?php  /* else : */ ?>
                <div class="services__row">
                    <div class="services__column">
                        <img src="<?php the_field('services_image_2'); ?>">
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
                        <img src="<?php the_field('services_image_2'); ?>">
                    </div>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <img src="<?php the_field('services_image_2'); ?>">
                    </div>
                    <div class="services__column">
                        <?php the_field('services_paragraph_4'); ?>
                    </div>
                </div>
                <div class="services__row">
                    <div class="services__column">
                        <?php the_field('services_paragraph_5'); ?>
                    </div>
                    <div class="services__column">
                        <img src="<?php the_field('services_image_2'); ?>">
                    </div>
                </div>
                <?php /* endif; */ ?>
                <?php /* endforeach;  */?>
                <?php /* endif; */?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>