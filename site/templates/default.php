<?php snippet('header') ?>

  <main class="main" role="main">
    
   <?php
      foreach($pages->visible() as $section) {
        echo $section->uid() . " ";
        snippet($section->uid(), array('data' => $section));
      }
    ?>

    <section id="mail">
      <div>
        <h2>More details soon! Subscribe to the newsletter</h2>
        <form action="index.php">
          <input type="email" placeholder="Enter your email address">
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </section>

    <section id="organization">
      <h2>The organization</h2>
      <ul>
        <li>
          <div>
            <p>A project by</p>
            <img src="assets/images/muda_logo_black.png" alt="">
            <img src="assets/images/MuDa1.jpeg" alt="">
          </div>
          <div>
            <p>
            The Museum of Digital Art is Europe's first physical and virtual museum dedicated to digital arts — an open space connecting creativity and technology.
            <br><br>                            

Located in Zurich West — a hot spot for science, technology and art — the MuDA aims to inspire and delight its audience with playful and poetic digital art installations run by 0s and 1s, but also serves as a platform to discuss and explore the intricate relationships between data, algorithms and society.
<br><br>                            
          The Museum of Digital Art is a project initiated by the Digital Arts Association (DAA), a non-profit organisation. 

            </p>
            <a href="#moar">More about MuDA &rarr;</a>
          </div>
        </li>
        <li>
          <div></div>
          <div></div>
        </li>
      </ul>
    </section>



    <?php foreach($pages->visible() as $section): ?>
        <?php if ($section->nav_title()): ?>
          <li>
            <a href="#<?php echo $section->uid() ?>">
              <?php echo $section->nav_title()->html() ?>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach ?>
  </main>

<?php snippet('footer') ?>