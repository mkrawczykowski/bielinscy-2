<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="">  <?php wp_head(); ?>
  <script type="text/javascript">
			// hide URL field on the iPhone/iPod touch
			function hideUrlBar() {
				// hide URL field on the iPhone/iPod touch
				var p = String(navigator.platform);
	
				container = document.getElementById("container");
				if( p === 'iPad' || p === 'iPhone' || p === 'iPod touch' ){
					var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
					if (parseInt(v[1], 10)>=7) {
						// iOS >=7
						if (container) {
							container.style.top=(0) + "px";
							container.style.left=(0) + "px";
							container.style.width=(window.innerWidth) + "px";
							container.style.height=(window.innerHeight) + "px";
						}
						if (obj) {
							obj.setViewerSize(window.innerWidth, window.innerHeight);
						}						
						window.scrollTo(0, 0);
					} else {
						if (container) {
							var cheight;
							switch(window.innerHeight) {
								case 208:cheight=268; break; // landscape
								case 260:cheight=320; break; // landscape, fullscreen
								case 336:cheight=396; break; // portrait, in call status bar
								case 356:cheight=416; break; // portrait 
								case 424:cheight=484; break; // portrait iPhone5, in call status bar
								case 444:cheight=504; break; // portrait iPhone5 
								default: cheight=window.innerHeight;
							}
							if ((cheight) && ((container.offsetHeight!=cheight) || (window.innerHeight!=cheight))) {
								container.style.height=cheight + "px";
							}
						}
						document.getElementsByTagName("body")[0].style.marginTop="1px";
						window.scrollTo(0, 1);
					}
				}
			}            
			if (window.addEventListener) {
				window.addEventListener("load", hideUrlBar);
				window.addEventListener("resize", hideUrlBar);
				window.addEventListener("orientationchange", hideUrlBar);
			}
	
		</script>
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