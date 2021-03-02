
<div class="py-5 jrw-gallery background-3">

    <div class="py-5">

        <div class="pb-3 container">

            <?php
                if ( get_sub_field('header-1-realizacje') ) {

                    printf('<h2 class="header-2 color-1">%1$s</h2>', get_sub_field('header-1-realizacje'));
                }
            ?>

            <p>Kliknij w wybraną realizację, aby zobaczyć jej szczegóły</p>

        </div>

        <div class="container the-content color-1">

            <div class="row">

                <?php

                $argsRealizacje  = array(
                    'post_type' => 'jrw-realizacje',
                    'posts_per_page'    => 3
                );

                $queryRealizacje = new WP_Query( $argsRealizacje );


                if ( $queryRealizacje->have_posts() ) {
                    while ( $queryRealizacje->have_posts() ) {
                        $queryRealizacje->the_post();

                        if ( get_the_post_thumbnail() ) {

                            printf('<div class="col-12 col-md-6 col-lg-4 py-3">');
                            printf('<div class="jrw-gallery-cover"><a class="d-block" href="%1$s"><div class="jrw-gallery-img" style="background-image: url(%3$s)"></div></a></div><div class="d-block background-2 py-3"><h2 class="header-5 px-3 mb-0"><a class="d-inline-block text-white" href="%1$s">%2$s<i class="pl-2 fas fa-images"></i></a></h2></div>', get_permalink( get_the_ID() ) , get_the_title(), get_the_post_thumbnail_url( get_the_ID(), 'medium' ) );
                            printf('</div>');
                        }
                    }
                }

                ?>
            </div>

            <?php

                if (get_sub_field('cta-link-1-realizacje') && get_sub_field('cta-text-1-realizacje')) {

                    echo '<div class="py-4">';
                    printf('<a href="%1$s" class="btn-jrw btn-basic d-inline-block">%2$s <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a> ', get_sub_field('cta-link-1-realizacje'), get_sub_field('cta-text-1-realizacje'));
                    echo '</div>';
                }

            ?>
        </div>
    </div>
</div>