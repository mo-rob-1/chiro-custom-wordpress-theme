<?php get_header(); ?>

<section class="slideshow">
    <div class="slideshow__container" class="carousel" data-flickity>
        <div class="slideshow__item-1 carousel-cell">
            <div class="slideshow__content-wrapper">
                <h1 class="slideshow__title">Manchester Chiropractic</h1>
                <p class="slideshow__desc">Specialist, Manchester based chiropractic with years of experience and expertise</p>
                <a class="slideshow__link" href="<?php echo site_url('/contact') ?>">Contact us</a>
            </div>
        </div>
        <div class="slideshow__item-2 carousel-cell">
            <div class="slideshow__content-wrapper">
                <h1 class="slideshow__title">Severe Back Pain?</h1>
                <p class="slideshow__desc">Book an appointment with one of our expert physiotherapists today and begin the journey to a pain free life</p>
                <a class="slideshow__link" href="<?php echo site_url('/book-appointment') ?>">Book Appointment</a>
            </div>
        </div>
        <div class="slideshow__item-3 carousel-cell">
            <div class="slideshow__content-wrapper">
                <h1 class="slideshow__title">Sports Injury?</h1>
                <p class="slideshow__desc">No problem. Our experienced professionals will have you back on the field in no time</p>
                <a class="slideshow__link" href="<?php echo site_url('/services') ?>">View Service</a>
            </div>
        </div>
    </div>
</section>

<section class="services">

    <div class="services__container">

    <div class="services__intro-container">
        <h2 class="services__intro-title">Chiro Services</h2>
        <p class="services__intro-desc">Here at Veronica physiotherapy clinic we strive to provide you with an exceptional quality of care across all our services which range from, 
        physiotherapy, ergonomics and more. All therapy services are carried out by experienced and fully trained experts. 
        To see our full range of therapy services please click on the link below.</p>
        <a class="services__intro-link" href="<?php echo site_url('/services') ?>">All Services</a>
    </div>

    <!-- <div class="services__dynamic-container"> -->
            <?php
            $args = array(
                'post_type' => 'post',
                'post_type' => 'wporg_service',
                'posts_per_page' => 2
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                        <div class="services__item">
                            <div class="services__image-wrapper"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                            <div class="services__text-wrapper">
                                <h2 class="services__heading"><a class="services__heading-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="services__desc"><?php echo wp_trim_words(get_the_excerpt(), 17); ?></p>
                                <p><a class="services__link-read-more" href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                        </div>
                    <?php
                    } wp_reset_postdata();
                }
            ?>
    <!-- </div> -->

    </div>

</section>
 
<?php get_footer(); ?>

