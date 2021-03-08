<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/single-produkt', 'title' );
?>

<div class="container product-page">
  <div class="row my-5">
    <div class="col-4">
      <div id="product1" style="height: 500px;" class=""></div>
    </div>
    <div class="col-8 mt-5">
			
			<?php 
				$price = get_field('price');
				if ($price) printf('<h3 class="mb-4 product-page__price">%s</h3>', $price);
				
				the_content(); 
			?>
			
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/object2vr/object2vr_player.js">
		</script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/object2vr/skin.js">
		</script>
		<script type="text/javascript">
			// create the object player with the container
			obj=new object2vrPlayer("product1");
			skin=new object2vrSkin(obj);
			obj.readConfigUrl("<?php echo get_template_directory_uri(); ?>/assets/object2vr/settings.xml");
			
			setTimeout(function() { hideUrlBar(); }, 10);
		</script>
		<noscript>
			<p><b>Please enable Javascript!</b></p>
		</noscript>		
<?php
get_template_part( 'template-parts/footer', 'main');