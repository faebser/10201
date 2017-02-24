<section id="mail">
  <div>
    <h2><?php echo $data->title()->text(); ?></h2>
    <form action="index.php">
      <input type="email" placeholder="<?php echo $data->placeholder()->text(); ?>">
      <input type="submit" value="<?php echo $data->button_text()->text(); ?>">
    </form>
  </div>
</section>