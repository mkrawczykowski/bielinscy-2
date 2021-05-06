<div class="page-title">
  <div class="container">
    <div class="row py-2 py-lg-2">
      <div class="col-12">
        
          <?php
          $taxonomy = 'category';
 
            $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
            
            $separator = ', ';
            
            if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
            
                $term_ids = implode( ',' , $post_terms );
            
                $terms = wp_list_categories( array(
                    'title_li' => '',
                    'style'    => 'none',
                    'echo'     => false,
                    'taxonomy' => $taxonomy,
                    'include'  => $term_ids
                ) );
            
                $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

                echo  '<h2 class="page-title__small-heading">' . $terms . '</h2>';
                echo  '<h2 class="page-title__big-heading">' . get_the_title() . '</h2>';
            }
          ?>

      </div>
    </div>      
  </div>
</div>