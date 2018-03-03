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
                    <div class="portfolio__links">
                        <ul>
                            <li>Industrial</li>
                            <li>Bridges</li>
                            <li>Commercial</li>
                            <li>Misc</li>
                        </ul>
                    </div>
                    <?php
                    $id = 19;
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

