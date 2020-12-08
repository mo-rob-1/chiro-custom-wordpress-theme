<?php

get_header(); ?>

<section class="landing">
    <h1 class="landing__title">Welcome to our blog!</h1>
</section>

<section class="blog>
<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="blog__post-item">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('d-m-Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">View Full Post</a></p>
        </div>
    <?php }
    echo paginate_links();
?>
</section>

<?php get_footer();
