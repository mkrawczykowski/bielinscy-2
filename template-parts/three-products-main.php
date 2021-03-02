<div class="container" style="" class="three-products  mt-4 pt-4">
	<div class="row my-4 py-4">
		<div class="col">
			<h2 class="text-center">
				Wyróżnione produkty
			</h2>
			<p class="text-center">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut tincidunt sem, vitae tristique nisi. Cras ut tellus ut sapien aliquam vulputate.
			</p>
		</div>
	</div>
<div class="row mb-4 py-4">
	<div class="col-sm m-3">
		<h3 class="text-center">Produkt XYZ1</h3>
		<div id="product1" style="height: 380px;"></div>
		<div class="button-outer">
			
		</div>
	</div>
	<div class="col-sm m-3">
		<h3 class="text-center">Produkt XYZ2</h3>
		<div id="product2" style="height: 380px;"></div>
		<div class="button-outer">
			
		</div>
	</div>
	<div class="col-sm m-3">
		<h3 class="text-center">Produkt XYZ3</h3>
		<div id="product3" style="height: 380px;"></div>
		<div class="button-outer">
			
		</div>
	</div>

</div>
<div class="row">
	<div class="col-sm">
		
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

</div>