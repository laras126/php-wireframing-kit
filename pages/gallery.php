<h2>This page is a gallery.</h2>

<p>Of nice animal pictures, nonetheless!</p>

<div class="gallery">
	<?php printImages('animals'); ?>
  <?php the_title(); // auto echo ?>
  <?php $title = get_the_title(); // return a value ?>
</div>