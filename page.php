<?php

get_header();

while(have_posts()) {
	the_post(); ?>

<section class="landing">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</section>

<section class="page__content">
	<?php the_content(); ?>
</section>


<?php }

get_footer();

?>