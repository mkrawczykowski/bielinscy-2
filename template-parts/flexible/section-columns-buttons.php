<?php
  $sectionColumnsButtonsTurnOnOff = get_sub_field('section-columns-buttons__turn-on-off');

  if ($sectionColumnsButtonsTurnOnOff){
?>
<div class="container three-products mt-4 pt-4">
		<?php
			$sectionColumnsButtonsHeading = get_sub_field('section-columns-buttons__heading');
			$sectionColumnsButtonsParagraph = get_sub_field('section-columns-buttons__paragraph');

			if ($sectionColumnsButtonsHeading || $sectionColumnsButtonsParagraph){
				?>

				<div class="row my-4 py-4">
					<div class="col">

						<?php 
							($sectionColumnsButtonsHeading) ? printf('<h2 class="d-flex justify-content-center">%s</h2>', $sectionColumnsButtonsHeading): '' ;
							($sectionColumnsButtonsParagraph) ? printf('<p class="text-center">%s</p>', $sectionColumnsButtonsParagraph): '' ;
						?>
					
					</div>
				</div>
				
				<?php
			}
		?>


		<?php

			if (have_rows('section-columns-buttons__repeater')){
				echo '<div class="row mb-4 py-4 three-products__products">';
				$counter = 1;
				while (have_rows('section-columns-buttons__repeater')) : the_row();

					$productId = get_sub_field('section-columns-buttons__product-id');
					$productPermalink = get_the_permalink($productId);

					printf('<div class="col-sm m-3">
						<a href="%s"><h3 class="text-center">%s</h3></a>
						<div id="product%s" style="height: 500px;" class="three-products__product"></div>
						<div class="d-flex justify-content-center mt-5">
							<a class="button button-color-1" href="%s">Dowiedz się więcej</a>
						</div></div>', $productPermalink, get_the_title($productId), $counter, $productPermalink);
					$counter++;
				endwhile;
				echo '</div>';
			}

		?>

	<div class="row">
		<div class="col-sm">
			
			<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/object2vr/object2vr_player.js">
			</script>
			<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/object2vr/skin.js">
			</script>
			<script type="text/javascript">
				// create the object player with the container
				obj=new object2vrPlayer("product1");
				skin=new object2vrSkin(obj);
				obj.readConfigUrl("<?php echo get_template_directory_uri(); ?>/assets/object2vr/settings.xml");
				
				setTimeout(function() { hideUrlBar(); }, 10);
				
				obj2=new object2vrPlayer("product2");
				skin=new object2vrSkin(obj2);
				obj2.readConfigUrl("<?php echo get_template_directory_uri(); ?>/assets/object2vr/settings.xml");

				obj3=new object2vrPlayer("product3");
				skin=new object2vrSkin(obj3);
				obj3.readConfigUrl("<?php echo get_template_directory_uri(); ?>/assets/object2vr/settings.xml");
			</script>
			<noscript>
				<p><b>Please enable Javascript!</b></p>
			</noscript>		
		</div>
	</div>	

<?php
  }

