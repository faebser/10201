<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>

</head>
<body>

  <header>
    <div class="logo"></div>
    <nav>
      <ul>
        <li><a href="#project">Project</a></li>
        <li><a href="#calendar">Calendar</a></li>
        <li><a href="#organization">Organization</a></li>
        <li><a href="#contactus">Contact us</a></li>
      </ul>
    </nav>
  </header>
