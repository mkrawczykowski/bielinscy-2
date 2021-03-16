
<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/page', 'title' );
?>

<div class="container-fluid background-light py-5">
  <div class="row">
    <div class="col">
      <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4 contact-icons mb-4 mb-lg-0">
          <div class="container">
            <div class="row">
              <div class="col contact-data">

                <?php
                  
                  printf('<div class="contact-data__the-content">%s</div>', get_the_content());
                  

                  if (have_rows('contact-data')){
                    while(have_rows('contact-data')) : the_row();
                      $contactDataChooseIcon = get_sub_field('contact-data__choose-icon');
                      $contactDataSpacer = get_sub_field('contact-data__spacer');
                      $spacerStyle = '';

                      ($contactDataSpacer) ? $spacerStyle = 'style="margin-bottom: 30px;"' : $spacerStyle = '';
                      
                      printf('<div class="contact-icons__%s" %s><img src="%s/assets/images/%s.svg"><p>%s</p></div>', $contactDataChooseIcon, $spacerStyle, get_template_directory_uri(), $contactDataChooseIcon, get_sub_field('contact-data__content'));
                  endwhile;
                  }
                ?>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8 contact-form">
          <h2>Formularz kontaktowy</h2>
          <?php
            echo do_shortcode("[ninja_form id='1']");
          ?>
        </div>
        
      </div>
    </div>
    </div>
  </div>
</div>

<?php
get_template_part( 'template-parts/footer', 'main');
