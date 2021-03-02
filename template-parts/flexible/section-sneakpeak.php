<div class="section-sneakpeak background-3 py-5">
    <div class="container py-0 py-md-5 ">

        <h2 class="header-2 color-1 pb-1 pb-md-3">
            <?php echo get_sub_field('header-1-sneakpeak') ?>
        </h2>

        <div class="color-1">
            <?php echo get_sub_field('wyswig-1-sneakpeak') ?>
        </div>

        <?php

            if ( get_sub_field( 'cta-link-1-sneakpeak' ) && get_sub_field('cta-text-1-sneakpeak') ) {

                echo '<div class="pt-3">';
                printf('<a href="%1$s" class="btn-jrw btn-basic d-inline-block">%2$s <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a> ',get_sub_field( 'cta-link-1-sneakpeak' ), get_sub_field('cta-text-1-sneakpeak') );
                echo '</div>';
            }

        ?>
    </div>

</div>