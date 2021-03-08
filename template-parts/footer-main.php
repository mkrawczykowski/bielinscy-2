</main>
</body>
<footer class="footer py-7">
  <div class="container">
    <div class="row gx-7">
      <?php
        $field1heading = get_field('field1__heading', 'options');
        $field1 = get_field('field1', 'options');

        function generateFooterColumn($heading, $content){
          if ($content){
            echo '<div class="col">';
            if ($heading) printf('<h3 class="footer__heading">%s</h3>', $heading);
            printf('<p class="footer__paragraph">%s</p>', $content);
            echo '</div>';
          }
        }
      
      generateFooterColumn(get_field('field1__heading', 'options'), get_field('field1', 'options'));
      generateFooterColumn(get_field('field2__heading', 'options'), get_field('field2', 'options'));
      generateFooterColumn(get_field('field3__heading', 'options'), get_field('field3', 'options'));
     ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</html>