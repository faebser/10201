<section id="project">
      <section id="data">
        <ul>
          <?php foreach($data->children()->visible() as $datapoint): ?>
          <li><span><?php echo $datapoint->title()->text(); ?></span><span><?php echo $datapoint->byline()->text(); ?></span></li>
          <?php endforeach ?>
        </ul>
      </section>
      <section id="text">
        <h2><?php echo $data->title()->text(); ?></h2>
        <h3><?php echo $data->heading_1()->text(); ?></h3>
        <?php echo $data->normal_text()->kirbytext(); ?>
        <?php echo $data->heading_2()->kirbytext(); ?>
      </section>
</section>