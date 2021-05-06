<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/single-produkt', 'title' );
?>

<div class="container product-page">
  <div class="row my-5">
    <div class="col">
      <?php
				the_content();
			?>
    </div>
    
  </div>
</div>
<?php
$folderName =	get_field('folder-name');
?>

<?php
get_template_part( 'template-parts/footer', 'main');