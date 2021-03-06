<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/main.css') ?>

</head>
<body>

  <header>
    <div class="logo">
      <img src="assets/images/1_logo_muda_sod.png" alt="">
    </div>
    <nav>
      <ul>
      <?php foreach($pages->visible() as $section): ?>
        <?php if ($section->nav_title("sackgsicht") != ""): ?>
          <li>
            <a href="#<?php echo $section->uid() ?>">
              <?php echo $section->nav_title()->html() ?>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach ?>
          <li class="dataset">
            <a href="http://bd.schoolofdata.ch/event/1" target="_blank">
              Dataset &rarr;
            </a>
          </li>
          <li class="lang">
            <a id="en" href="/iooiiooi/en">
              EN
            </a>
            &mdash;
            <a id="de" href="/iooiiooi/de">
              DE
            </a>
            <!--&mdash;
            <a id="fr" href="/iooiiooi/fr">
              FR
            </a> -->
          </li>
        </ul>
    </nav>
  </header>