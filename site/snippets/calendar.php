<section id="calendar">
  <h2><?php echo $data->title()->text(); ?></h2>
  <ul>
    <?php foreach($data->children()->visible() as $date): ?>
      <li>
        <div class="date">
          <span><?php echo $date->start()->text(); ?></span>
          <span><?php echo $date->start_subtitle()->text(); ?></span>
        </div>
        <div>
          <span><?php echo $date->title()->text(); ?></span>
          <span><?php echo $date->subtitle()->text(); ?></span>
        </div>
        <div>
          <a href="<?php echo $date->target()->text(); ?>"><?php echo $date->target_text()->text(); ?> <span>&rarr;</span></a>
        </div>
      </li>
    <?php endforeach ?>
  </ul>
</section>