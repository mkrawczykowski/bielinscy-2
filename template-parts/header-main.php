<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="">  <?php wp_head(); ?>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<body>

  <header class="header">
    <div class="container header-container">
      <div class="row header-row">
        <div class="col header-col">
          <nav class="logo-nav">
            <a href="<?php echo site_url(); ?>" class="logo-nav__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bielinscy-90.webp" alt="Zakład Brązowniczy S.C. Bielińscy - logo">
            </a>
            
            <?php
              wp_nav_menu( array(
                'menu' => 'main-menu',
                'theme_location' => 'main-menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'logo-nav__main-menu'
              ));
						?>
						<div class="logo-nav__hamburger-menu"><span></span></div>
					</nav>
					
        </div>
      </div>
    </div>
  </header>

<main>