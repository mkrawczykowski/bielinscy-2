
<?php
get_template_part( 'template-parts/header', 'main' ); ?>

<div class="container">
    <div class="row">
    <div class="col">
        <?php the_content(); ?>
    </div>
    </div>
</div>

<!-- // if( have_rows( 'flexible-fields' ) ){

//         while( have_rows( 'flexible-fields' ) ){

//             the_row();

//             $possibleFile = get_template_directory() . '/template-parts/flexible/' . get_row_layout() . '.php';

//             if( file_exists( $possibleFile ) ){
//                 include( $possibleFile );
//             }
//         }
//     }
// get_template_part( 'template-parts/frontpage', 'slider' );

// get_template_part('template-parts/three-products', 'main');
// get_template_part('template-parts/three-offers', 'main'); -->
<?php
get_template_part( 'template-parts/footer', 'main');

do_shortcode('[ggpkg id=166]');
