
<?php
  get_template_part( 'template-parts/header', 'main' ); 

  if( have_rows( 'flexible-fields' ) ){
    while( have_rows( 'flexible-fields' ) ){
      the_row();
        $possibleFile = get_template_directory() . '/template-parts/flexible/' . get_row_layout() . '.php';
            
        if( file_exists( $possibleFile ) ){
          include( $possibleFile );
        }
      }
    }

get_template_part('template-parts/three-offers', 'main');

get_template_part( 'template-parts/footer', 'main');
?>