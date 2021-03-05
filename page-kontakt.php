
<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/page', 'title' );
?>

<div class="container-fluid background-light py-5">
  <div class="row">
    <div class="col">
      <div class="container">
      <div class="row">
        <div class="col">
          <?php
            echo do_shortcode('[contact-form-7 id="68" title="Formularz 1"]');
          ?>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<?php
get_template_part( 'template-parts/footer', 'main');
