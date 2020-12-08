<?php

    get_header();

    while(have_posts()) {
        the_post(); ?>

    <section class="appointment">
        <?php the_content(); ?>


    </section>

    <?php }

    get_footer();
    
?>