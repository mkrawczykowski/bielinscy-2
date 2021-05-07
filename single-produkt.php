<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/single-produkt', 'title' );
?>

<div class="container product-page">
  <div class="row my-5">
    <div class="col-12 col-md-7 col-lg-6">
      <div id="product" class="product-page__product">
      </div>
    

      <!-- <?php
				the_post_thumbnail();
			?> -->
    </div>    
    <div class="col-12 col-md-5 col-lg-6">
      <?php
        the_content();
        the_field('folder-name');
			?>
    </div>

  </div>
</div>
<?php
  $folderName = get_field('folder-name');
?>

<script type="text/javascript" src="<?php echo get_site_url(); ?>/produkty/<?php echo $folderName; ?>/object2vr_player.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/produkty/<?php echo $folderName; ?>/skin.js"></script>
      
<script type="text/javascript">
	obj=new object2vrPlayer("product");
	skin=new object2vrSkin(obj);
	obj.readConfigUrl("<?php echo get_site_url(); ?>/produkty/<?php echo $folderName; ?>/settings.xml");
</script>

<?php
get_template_part( 'template-parts/footer', 'main');