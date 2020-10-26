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
  <!-- BLOCK 2 -->
  <?php
  while (have_rows('block_2')) {
    the_row();
  ?>

    <div class="container-50">
      <h1> <?php the_sub_field('rubrik'); ?> </h1>

      <img src="<?php echo get_sub_field('bild')['url']; ?>" alt="" width="100%">

      <p><?php the_sub_field('text'); ?></p>

      <ul>
        <li><?php the_sub_field('list_text1'); ?></li>
        <li><?php the_sub_field('list_text_2'); ?></li>
        <li><?php the_sub_field('list_text_3'); ?></li>
      </ul>

      <a href="#"><?php the_sub_field('knapp_text'); ?></a>

    </div>
  <?php } ?>


  <!-- SECTION A -->
  <?php
  while (have_rows('block_3')) {
    the_row();
  ?>
    <section class="section-a">
      <div class="section-text">
        <h2><?php the_sub_field('rubrik'); ?></h2>
        <p><?php the_sub_field('text'); ?></p>
      </div>
    </section>
  <?php } ?>


  <!-- GRID -->
  <?php
  while (have_rows('block_4')) {
    the_row();
  ?>

    <div class="container-80">
      <div class="grid">
        <div class="grid-item"> <img src="<?php echo get_sub_field('bild_1')['url']; ?>" alt="" width="100%"></div>
        <div class="grid-item"> <img src="<?php echo get_sub_field('bild_2')['url']; ?>" alt="" width="100%"></div>
        <div class="grid-item"> <img src="<?php echo get_sub_field('bild_3')['url']; ?>" alt="" width="100%"></div>
        <div class="grid-item"> <img src="<?php echo get_sub_field('bild_4')['url']; ?>" alt="" width="100%"></div>
      </div>
    </div>
  <?php } ?>


  <!-- Block 4 -->
  <?php
  while (have_rows('block_5')) {
    the_row();
  ?>


    <section class="section-b">
      <div class="container-50">
        <h2><?php the_sub_field('rubrik_1'); ?></h2>
        <p><?php the_sub_field('text_1'); ?></p>
        <h2><?php the_sub_field('rubrik_2'); ?></h2>
        <p><?php the_sub_field('text_2'); ?></p>
        <h2><?php the_sub_field('rubrik_3'); ?></h2>
        <p><?php the_sub_field('text_3'); ?></p>
      </div>
    </section>
  <?php } ?>


  <!-- Block 6 -->
  <?php
  while (have_rows('block_6')) {
    the_row();
  ?>

    <section class="section-c">
      <div class="container-80">
        <div class="grid">
          <article>
            <p>" <?php the_sub_field('citat_1'); ?> "</p>
            <small>- <?php the_sub_field('namn_1'); ?></small>
          </article>
          <article>
            <p>" <?php the_sub_field('citat_2'); ?> "</p>
            <small>- <?php the_sub_field('namn_2'); ?></small>
          </article>
          <article>
            <p>" <?php the_sub_field('citat_3'); ?> "</p>
            <small>- <?php the_sub_field('namn_3'); ?></small>
          </article>
        </div>
      </div>
    </section>

  <?php } ?>

</main>

<?php
get_footer();
?>