<?php snippet('header') ?>

  <main class="main" role="main">
    
   <?php
      foreach($pages->visible() as $section) {
        snippet($section->intendedTemplate(), array('data' => $section));
      }
    ?>



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
  </main>

<?php snippet('footer') ?>