<div class="py-5 jrw-referencje">
    <div class="py-5">
        <div class="pb-4 container">

            <?php

                if ( get_sub_field('header-1-referencje') ) {

                    printf('<h2 class="header-2 color-1">%1$s</h2>', get_sub_field('header-1-referencje'));
                }
            ?>

        </div>

        <div class="container color-1">

            <div class="row">

                <?php

                $argsReferencje  = array(
                    'post_type' => 'jrw-referencje',
                    'posts_per_page'    => 2
                );

                $queryReferencje = new WP_Query( $argsReferencje );


                if ( $queryReferencje->have_posts() ) {
                    while ( $queryReferencje->have_posts() ) {
                        $queryReferencje->the_post();

                        ob_start();
                        ?>

                        <div class="col-12 d-flex flex-column col-lg-6 pb-3">
                            <div class="background-3 p-4 jrw-referencje-single h-100">

                                <h2 class="header-4"><a href="<?php echo get_permalink()?>"><?php echo wp_trim_words( get_the_title() , 9) ?></a></h2>
                                <div class="row py-3">
                                    <?php

                                    if ( get_field('logo-1-referencje') || get_field('firma-referencje')  ) {

                                        printf('<div class="col-12 col-sm-4"><div class="pb-2">%1$s</div><p class="paragraph-2">%2$s</p></div>',
                                            wp_get_attachment_image(get_field('logo-1-referencje'), 'medium', false, array( 'class' => 'img-fluid' ) ),
                                            get_field('firma-referencje'));
                                        }

                                    if ( get_the_excerpt() ) {

                                        printf('<div class="col"><div class="header-5 font-italic"><a href="%2$s">%1$s</a></div></div>',
                                            wp_trim_words( get_the_excerpt(), 26 ),
                                            get_permalink() );
                                    }

                                    ?>

                                </div>
                            </div>

                            <div class="text-right">
                                <?php

                                    if ( get_field('pdf-referencje')  ) {

                                        printf('<a href="%1$s" target="_blank" class="d-inline-block background-1 text-white py-2 px-3">Pobierz pełne referencje <i class="pl-2 fas fa-file-pdf"></i></a>', get_field('pdf-referencje') );
                                    }
                                ?>
                            </div>
                        </div>

                        <?php
                    }
                }

                echo ob_get_clean();
                wp_reset_postdata();

                ?>
            </div>

            <?php

                if (get_sub_field('cta-link-1-referencje') && get_sub_field('cta-text-1-referencje')) {

                    echo '<div class="pt-5">';
                    printf('<a href="%1$s" class="btn-jrw btn-basic d-inline-block">%2$s <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a> ', get_sub_field('cta-link-1-referencje'), get_sub_field('cta-text-1-referencje'));
                    echo '</div>';
                }

            ?>
        </div>
    </div>
</div>