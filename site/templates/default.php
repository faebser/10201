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
     <img src="assets/images/2_logo project.png">
     <p>MuDA 2017, page made by Giulia & Fabian</p>
  </footer>

  <script src="assets/js/zepto.js"></script>
  <script src="assets/js/fastdom.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>