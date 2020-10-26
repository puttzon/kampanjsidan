<?php
get_header();
?>


<?php
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>

    <section id="hero">
      <h1> <?php the_title(); ?> </h1>
      <p> <?php the_content(); ?> </p>
    </section>
  <?php } ?>
<?php } ?>

<main>
  <div class="container-50">
    <h1>Lorem</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="" width="100%">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque necessitatibus neque culpa corporis alias, minima accusantium consequatur eligendi magnam excepturi omnis architecto quidem animi quos ipsa perferendis ex maxime. Fugiat illo velit optio laudantium alias, molestiae perferendis vitae voluptatum dolorem, perspiciatis vel repellendus, commodi labore nisi voluptatibus qui ipsum tempora! Ut consectetur tenetur dolorem quis quo quaerat esse, facilis commodi, aperiam harum accusantium officia nam, error optio possimus consequatur odio cum! Perferendis cupiditate beatae alias. Quasi fuga cumque alias inventore temporibus accusantium laudantium dolore totam consectetur nesciunt recusandae est, id itaque explicabo dignissimos? Nisi laborum ipsam minima corporis debitis tempora?</p>

    <ul>
      <li>Lorem, ipsum dolor.</li>
      <li>Lorem, ipsum.</li>
      <li>Lorem ipsum dolor sit.</li>
    </ul>

    <a href="#">Lorem</a>

  </div>
  <!-- SECTION A -->
  <section class="section-a">
    <div class="section-text">
      <h2>Lorem, ipsum.</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo amet voluptate id culpa aspernatur molestiae delectus! Magni ex mollitia animi labore, est, tempore explicabo voluptas maiores illum vero, iure reprehenderit aut. Minima tempora, ut dolore, tenetur a distinctio eaque suscipit rerum facilis nihil iste dolorem doloremque ea nobis accusamus sapiente obcaecati nam laborum amet voluptas fugiat velit quia. Repellendus, et?</p>
    </div>
  </section>

  <!-- GRID -->
  <div class="container-80">
    <div class="grid">
      <div class="grid-item"> <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="" width="100%"></div>
      <div class="grid-item"> <img src="<?php echo get_template_directory_uri(); ?>/img/img4.jpg" alt="" width="100%"></div>
      <div class="grid-item"> <img src="<?php echo get_template_directory_uri(); ?>/img/img5.jpg" alt="" width="100%"></div>
    </div>
  </div>

  <section class="section-b">
    <div class="container-40">
      <h2>Lorem ipsum dolor sit.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus in ad maxime earum. Incidunt rerum dolorum inventore velit reiciendis beatae officiis hic laboriosam adipisci mollitia?</p>
      <h2>Lorem ipsum dolor sit.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus in ad maxime earum. Incidunt rerum dolorum inventore velit reiciendis beatae officiis hic laboriosam adipisci mollitia?</p>
      <h2>Lorem ipsum dolor sit.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus in ad maxime earum. Incidunt rerum dolorum inventore velit reiciendis beatae officiis hic laboriosam adipisci mollitia?</p>
    </div>
  </section>

  <section class="section-c">
    <div class="container-80">
      <div class="grid">
        <article>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro a perspiciatis officiis ex asperiores nihil, perferendis alias in enim id exercitationem dolorum, dignissimos tempore modi placeat eius accusamus eligendi quam?</p>
          <small>- Jon Doe</small>
        </article>
        <article>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro a perspiciatis officiis ex asperiores nihil, perferendis alias in enim id exercitationem dolorum, dignissimos tempore modi placeat eius accusamus eligendi quam?</p>
          <small>- Jon Doe</small>
        </article>
        <article>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro a perspiciatis officiis ex asperiores nihil, perferendis alias in enim id exercitationem dolorum, dignissimos tempore modi placeat eius accusamus eligendi quam?</p>
          <small>- Jon Doe</small>
        </article>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>