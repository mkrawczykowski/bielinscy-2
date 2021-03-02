<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="">  <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4">
          <a href="" class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bielinscy-90.webp" alt="Zakład Brązowniczy S.C. Bielińscy - logo"></a>
        </div>
        <div class="col-6 col-md-8 d-flex justify-content-end align-items-center">
          <input class="header__checkbox" type="checkbox" id="header__checkbox" />
          <label class="header__hamburger-button" for="header__checkbox"><span class="header__icon"></span></label>
          <nav class="header__nav">
            <?php
              wp_nav_menu( array(
                'menu'          	=> 'main-menu',
                'theme_location'	=> 'main-menu',
                'depth'         	=> 2,
                'container'			=> false,
              ));
            ?>
          </nav>
        </div>
      </div>
    </div> 
</header>
<main>