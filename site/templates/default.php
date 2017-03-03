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

  <script src="assets/js/zepto.js"></script>
  <script src="assets/js/fastdom.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>