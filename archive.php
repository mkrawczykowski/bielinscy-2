<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/archive', 'title' );
?>
<div class="container product-archive">
  <div class="row">
    <div class="col my-4">

<?php
$archiveDescription = get_the_archive_description();
if ($archiveDescription){
  printf('%1$s', $archiveDescription);
}

    $args = array(  
        'post_type' => 'produkt',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );






    $the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul class="product-archive__list">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $featuredImgUrl = get_the_post_thumbnail_url(get_the_ID(),'full'); 
        ?>
        <li class="product-archive__item">
          <span style="background-image: url('<?php echo esc_url($featuredImgUrl); ?>');">
          </span><h4><?php print the_title(); ?></h4>
        </li>


<?php
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();




    ?>

    </div>
  </div>
</div>

<?php
get_template_part( 'template-parts/footer', 'main');