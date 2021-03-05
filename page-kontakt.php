
<?php
get_template_part( 'template-parts/header', 'main' );
get_template_part( 'template-parts/page', 'title' );
?>

<div class="container-fluid background-light py-5">
  <div class="row">
    <div class="col">
      <div class="container">
      <div class="row">
        <div class="col-5 contact-form">
          <h2>Formularz kontaktowy</h2>
          <?php
            echo do_shortcode("[ninja_form id='1']");
          ?>
        </div>
        <div class="col-7 contact-icons">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="contact-icons__telephone">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg">
                  <p>123 456 789</p>
                </div>
              </div>
              <div class="col">
                <div class="contact-icons__email">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg">
                  <p>kontakt@stronyireszta.pl</p>
                </div>
              </div>
              <div class="col">
                <div class="contact-icons__address">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg">
                  <p>ul. Jakaś 2/5
                    67-987 Ltyuui
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          
          
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<?php
get_template_part( 'template-parts/footer', 'main');
