<div class="container-fluid py-5 section-maincta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="d-none d-md-block col-6"></div>
        <div class="col-12 d-flex justify-content-center col-md-6">
          <div class="section-maincta__box p-3 background-4 ">
            <?php

              if ( get_sub_field('heading-maincta') ) {
                printf('<h2 class="heading-maincta color-1">%1$s</h2>', get_sub_field('heading-maincta'));
              }

              if ( get_sub_field('txt-maincta') ) {
                printf('<p class="txt-maincta color-2">%1$s</p>', get_sub_field('txt-maincta'));
              }
            
              if ( get_sub_field( 'btn-txt-maincta' ) && get_sub_field('linkbtn-link-maincta') ) {
                echo '<div class="pt-3">';
                printf('<a href="%1$s" class="btn-jrw btn-basic d-inline-block">%2$s <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a> ',get_sub_field( 'linkbtn-link-maincta' ), get_sub_field('btn-txt-maincta') );
                echo '</div>';
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>