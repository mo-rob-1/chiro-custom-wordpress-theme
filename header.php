<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>

<header>
    
<nav>
        <h1 class="logo"><a class="logo__link" href="<?php echo get_home_url() ?>">Chiro</a></h1>

        <ul>
            <li><a href="<?php echo get_home_url() ?>">Home</a></li>
            <li><a href="<?php echo site_url('/about') ?>">About</a></li>
            <li><a href="<?php echo site_url('/services') ?>">Services</a></li>
            <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
			<li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
			<li><a href="<?php echo site_url('/book-appointment') ?>">Book Appointment</a></li>
        </ul>
</nav>

</header>