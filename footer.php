<?php wp_footer(); ?>

<?php
while (have_rows('block_7')) {
  the_row();
?>

  <footer>
    <div class="container-80">
      <div class="grid2">
        <ul>
          <h3><?php the_sub_field('namn'); ?></h3>
          <li><?php the_sub_field('adress'); ?></li>
          <li><?php the_sub_field('postnummer'); ?></li>
          <li><?php the_sub_field('stad'); ?></li>
        </ul>
        <ul>
          <li><?php the_sub_field('mail'); ?></li>
          <li><?php the_sub_field('telefonnummer'); ?></li>
        </ul>
      </div>
    </div>
  </footer>

<?php } ?>

</body>

</html>