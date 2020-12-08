<?php

    get_header();

    while(have_posts()) {
        the_post(); ?>

    <section class="contact">
        <?php the_content(); ?>


    </section>

    <?php }

    get_footer();
    
?>