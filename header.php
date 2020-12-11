<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>

<main>

<header class="header">

    <div class="header__logo-and-toggle-container">
        <div class="header__logo"><a class="logo__link" href="<?php echo get_home_url() ?>">Chiro</a></div>

        <button id="toggle" class="hamburger hamburger--squeeze js-hamburger menu-icon" type="button">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
    
    <nav class="header__nav">
            <ul id="nav-panel" class="header__nav-ul">
                <li class="header__nav-li"><a href="<?php echo get_home_url() ?>">Home</a></li>
                <li class="header__nav-li"><a href="<?php echo site_url('/about') ?>">About</a></li>
                <li class="header__nav-li"><a href="<?php echo site_url('/services') ?>">Services</a></li>
                <li class="header__nav-li"><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li class="header__nav-li"><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
                <li class="header__nav-li header__book-appointment"><a href="<?php echo site_url('/book-appointment') ?>">Book Appointment</a></li>
            </ul>
    </nav>
</header>