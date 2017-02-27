<section id="organization">
  <h2><?php echo $data->title()->text(); ?></h2>
  <ul>
    <?php foreach($data->children()->visible() as $orga): ?>
      <li>
        <div>
          <p><?php echo $orga->byline()->text(); ?></p>
          <?php foreach($orga->files()->sortBy('sort', 'asc') as $image): ?>
            <img src="<?php echo $image->url() ?>" alt="<?php echo '' ?>">
          <?php endforeach ?>
        </div>
        <div>
          <?php echo $orga->description()->kirbytext(); ?>
          <a href="<?php echo $orga->link()->text(); ?>"><?php echo $orga->link_text()->text(); ?> &rarr;</a>
        </div>
      </li>
    <?php endforeach ?>
    <li>
      <div></div>
      <div></div>
    </li>
  </ul>
</section>