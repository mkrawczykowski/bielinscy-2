
<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/page', 'title' );
?>

<div class="container">
  <div class="row my-5">
    <div class="col">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php
get_template_part( 'template-parts/footer', 'main');
