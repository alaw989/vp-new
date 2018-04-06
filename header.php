<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <script src="https://use.fontawesome.com/d1a05170da.js"></script>
    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        <?php wp_title(); ?>
    </title>
    <!-- Slick carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/slick.css">
    <?php wp_head(); ?>
</head>

<?php 
$phone_number = get_field('phone_number', 'option');
$logo = get_field('company_logo', 'option');
?>

<body>
    <div class="upheader-wrap">
        <div class="container">
            <div class="upheader-container">
                <div class="logo-container">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo $logo['url']; ?>" /> </a>
                </div>
                <div class="upheader-box">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="box-right">
                        <p>Location</p>
                        <h4>
                            <?php the_field('location', 'option'); ?>
                        </h4>
                    </div>
                </div>
                <div class="upheader-box">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="box-right border-right">
                        <p>Office Hours</p>
                        <h4><?php the_field('hours_of_operation', 'option'); ?></h4>
                    </div>
                </div>
                <div class="upheader-box">
                    <div class="box-right">
                        <div class="call-us-container">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:<?php echo $phone_number; ?>">
                                <p>Call Us</p>
                            </a>
                        </div>
                        <a href="tel:<?php echo $phone_number; ?>">
                            <h2>
                                <?php  echo $phone_number; ?>
                            </h2>
                        </a>
                    </div>
                </div>



                <!-- nav-right -->
                <main>
                    <nav>
                        <div class="button" id="btn">
                            <div class="bar top"></div>
                            <div class="bar middle"></div>
                            <div class="bar bottom"></div>
                        </div>
                        <!-- nav-right -->
                    </nav>
                </main>
                <div class="sidebar">

                    <?php
                            wp_nav_menu(array(
                                'menu' => 'primary',
                                'theme_location' => 'primary',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'mobile-sidebar-list',
                                'container_id' => '',
                                'menu_class' => 'mobile-sidebar',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker(), )
                            );
                            ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap">
        <div class="container">
            <div class="header-container">
                <!--
              </div>-->
                <div class="nav-container">
                    <nav class="nav" id="bs-example-navbar-collapse-1">
                        <?php
                            wp_nav_menu(array(
                                'menu' => 'primary',
                                'theme_location' => 'primary',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'nav',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker(), )
                            );
                            ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>