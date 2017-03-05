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

  <footer>
     <img src="assets/images/2_logo_project.png">
     <p>MuDA 2017, page made by Giulia & Fabian</p>
  </footer>

  <?php snippet('deploy'); ?>
</body>
</html>
