<div class="slider">
  <div class="container">
    <div class="row">
      <div class="col my-11">
        <h2 class="slider__small-heading">Coś</h2>
        <h1 class="slider__big-heading">Większy tytuł</h1>
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="slider__breadcrumbs">','</p>' );
          }
        ?>
      </div>
    </div>      
  </div>
</div>