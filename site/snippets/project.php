<section id="project">
      <section id="data">
        <ul>
          <li><span>15,065</span><span>total population in Kreis 5</span></li>
          <li><span>32%</span><span>foreigners living in Kreis 5</span></li>
          <li><span>138</span><span>refugees living and/or taking asylum in Kreis 5</span></li>
          <li><span>2691.43</span><span>ha2 of Kreis 5 used for garden surfaces
</span></li>
          <li><span>450,561</span><span>people working in Kreis 5</span></li>
        </ul>
      </section>
      <section id="text">
        <h2><?php echo $data->title()->text(); ?></h2>
        <h3><?php echo $data->heading_1()->text(); ?></h3>
        <?php echo $data->normal_text()->kirbytext(); ?>
        <?php echo $data->heading_2()->kirbytext(); ?>
      </section>
</section>