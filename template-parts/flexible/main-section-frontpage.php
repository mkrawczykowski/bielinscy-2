<div class="slider">
  <div class="container">
    <div class="row py-3 py-md-8  h-100 align-items-center">
      <div class="col-12 col-sm-6 col-md-5">
        <?php
          $mainSectionFrontpageText = get_sub_field('main-section-frontpage__text');
          if ($mainSectionFrontpageText){
            printf('<h1 class="slider__big-heading">%s</h1>', $mainSectionFrontpageText);
          }

          $mainSectionFrontpageParagraph = get_sub_field('main-section-frontpage__paragraph');
          if ($mainSectionFrontpageText){
            printf('<p class="slider__paragraph">%s</p>', $mainSectionFrontpageParagraph);
          }

          $mainSectionFrontpageButtonText = get_sub_field('main-section-frontpage__button-text');
          $mainSectionFrontpageButtonUrl = get_sub_field('main-section-frontpage__button-url');

          if ($mainSectionFrontpageButtonText && $mainSectionFrontpageButtonUrl){
            printf('<div class="mt-3"><a class="button button-color-2" href="%s">%s</a></div>', $mainSectionFrontpageButtonUrl, $mainSectionFrontpageButtonText);
          }
        ?>
        
      </div>
      <div class="col-12 d-none col-sm-6 col-md-7 d-lg-block"></div>
    </div>
  </div>
</div>