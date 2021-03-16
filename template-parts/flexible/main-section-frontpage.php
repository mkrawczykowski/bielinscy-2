<div class="slider">
  <div class="container">
    <div class="row py-3 py-lg-8">
      <div class="col-12 col-lg-6">
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
      <div class="col-12 col-lg-6"></div>
    </div>
  </div>
</div>