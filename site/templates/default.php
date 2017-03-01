<?php snippet('header') ?>

  <main class="main" role="main">
   <?php
      foreach($pages->visible() as $section) {
        if ($section->intendedTemplate() != "footer") {
          snippet($section->intendedTemplate(), array('data' => $section));
        }
      }
    ?>
  </main>

<?php
    foreach($pages->visible() as $section) {
      if ($section->intendedTemplate() == "footer") {
        snippet($section->intendedTemplate(), array('data' => $section));
      }
    }
  ?>