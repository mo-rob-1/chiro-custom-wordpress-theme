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
 
<?php get_footer(); ?>

