<?php

    get_header();

    while(have_posts()) {
        the_post(); ?>

    <section class="about">
        <?php the_content(); ?>


    </section>

    <?php }

    get_footer();
    
?>