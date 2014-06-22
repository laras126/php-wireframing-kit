<?php

	// ----
	// Printing Pictures
	// ----

	// Function to print images
	function printGalleryItem($path, $alt) { ?>
		<div class="gallery__item">
			<img src="<?php echo $path; ?>" alt="<?php echo $alt; ?> ">
		</div>
	<?php }


	// Loop through image directory and printGalleryItem markup for each
	// Reference: 
	// http://www.flydigital.com.au/blog/2011/01/20/how-to-loop-through-files-in-a-folder-in-php-the-quick-way/

	function printGallery($dir, $alt) {
		echo '<div class="gallery">';
		$fdir = 'assets/img/galleries/' . $dir . '/*';
		foreach(glob($fdir) as $img_path) {  
			printGalleryItem($img_path, $alt);
		}
		echo '</div>';
	}




	// ----
	// Content
	// ----

	// Large heading/tagline at top of page
	function printCallout($heading, $tagline) { ?>
        <header class="callout">
        	<div class="col-12">
        		<h1 class="headline"><?php echo $heading ?></h1>
        		<h2 class="tagline"><?php echo $tagline; ?></h2>
        	</div>
        </header>
	<?php }


	// Figure and caption
	function printFigure($image, $caption) { ?>
	    <figure class="fig-supporting">
	    	<img src="assets/img/<?php echo $image ?>" alt="Supporting Image">
	    	<figcaption><?php echo $caption; ?></figcaption>
	    </figure>

	<?php }


	// Row of three icon things on the front page
	function printHomeIcon($img, $title, $content) { ?>
		<div class="col-4">
			<img src="assets/img/<?php echo $img; ?>" alt="Supporting point">
			<h5><?php echo $title ?></h5>
			<p><?php echo $content; ?></p>
		</div>
	<?php }


	// Blog post
	function printPostExcerpt($title, $date, $excerpt) { ?>
		<article class="col-12">
			<div class="col-4">
				<img src="assets/img/milkyway.jpeg" alt="Post image">
			</div>
			<div class="col-8">
				<h2><?php echo $title; ?></h2>
				<time><?php echo $date; ?></time>
				<p><?php echo $excerpt; ?></p>	
			</div>
		</article>
	<?php }





	// ----
	// Footer
	// ----

	// Footer widget, duh
	function printWidget($title, $content) { ?>
		<div class="widget__content col-4">
			<h5><?php echo $title ?></h5>
			<?php echo $content; ?>	
		</div>
	<?php }



?>
