<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name')?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

    <header>	
      <div class="uk-offcanvas-content">
        <div class="uk-inline uk-height-viewport hero-dark">
      </div>
      <div class="uk-offcanvas-content">
        <div class="uk-inline uk-height-viewport hero-image" uk-parallax="bgy: -200">
      </div>

        <div class="uk-container uk-container-expand uk-text-center" id="header">
            <ul class="uk-list uk-position-top-right" id="nav">
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <h1 id="hero"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
     </header>

