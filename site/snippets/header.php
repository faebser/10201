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
      <img src="assets/images/muda_logo_black.png" alt="">
      <span>School of Data</span>
    </div>
    <nav>
      <ul>
        <li><a href="#project">Project</a></li>
        <li><a href="#calendar">Calendar</a></li>
        <li><a href="#organization">Organization</a></li>
        <li><a href="#contactus">Contact us</a></li>
        <li>
          <select name="lang" id="lang">
            <option value="en">ENG</option>
            <option value="de">GER</option>
            <option value="fr">FRA</option>
            <option value="it">ITA</option>
          </select>
        </li>
    </nav>
  </header>
