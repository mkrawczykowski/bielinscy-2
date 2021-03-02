
<div style="max-width: 2400px" class="section-headergallery container-jrw container-fluid px-0 background-3">

        <?php

            if ( get_sub_field('visibility-headergallery') and get_sub_field('gallery-1-headergallery') ) {

                echo '<div class="row m-0">';

                $galleryID   =   'realizacje'.str_replace( array('.',' '), '', microtime() );

                if ( have_rows( 'gallery-1-headergallery' ) ) {
                    while ( have_rows( 'gallery-1-headergallery') ) {
                        the_row();

                        $size               =   'large'; // (thumbnail, medium, large, full or custom size)
                        $icon               =   false;
                        $bgImgId            =   get_sub_field( 'img-1-headergallery' );
                        $imgDesc            =   get_sub_field( 'desc-1-headergallery' );

                        $VideoBgImgSrc = wp_get_attachment_image_src($bgImgId, $size, $icon);
                        $bgImgUrl = is_array($VideoBgImgSrc) ? $VideoBgImgSrc[0] : $bgImgUrlDefault;

                        $fullSizeBgImgSrc = wp_get_attachment_image_src($bgImgId, 'large', $icon);
                        $fullSizeImgUrl = is_array($fullSizeBgImgSrc) ? $fullSizeBgImgSrc[0] : '';

                        printf('<div class="col p-0">');
                        printf('<a class="d-block gallery-link" data-fancybox="gallery%1$s" href="%2$s"><div class="gallery-img" style="background-image: url(%3$s)"></div><div class="px-3 img-desc d-none d-md-inline-block">%4$s</div></a>',
                                $galleryID,
                                $fullSizeImgUrl,
                                $bgImgUrl,
                                $imgDesc);
                        echo '</div>';

                            }
                    }
            }

                echo '</div>'; // row

            ?>
</div>


