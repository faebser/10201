<?php snippet('header') ?>

  <main class="main" role="main">
   <?php
      foreach($pages->visible() as $section) {
        echo $section->intendedTemplate() . " ";
        snippet($section->intendedTemplate(), array('data' => $section));
      }
    ?>
  </main>

<?php snippet('footer') ?>