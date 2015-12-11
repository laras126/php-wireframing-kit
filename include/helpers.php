<?php

	// Get the content query string. This is used in all templates to define what, well, content to show. You'll need to define a $file variable and concatenate $content with it to get the appropriate file content.

	$content = $_GET['content'];


	// Loop through image directory and print markup for each. If you'd like to specify different markup or classes, you could add additional parameters to this function

	// Or even reference the $content query string above!

	function printImages($dir) {
		$fdir = 'images/' . $dir . '/*';
		$content = '';
		foreach(glob($fdir) as $img) {
			$content .= '<img src="' . $img . '" />';
		}
		return $content;
	}

	function printContent($dir, $open, $close) {
		$fdir = $dir . '/*';
		foreach(glob($fdir) as $post) {
			echo $open;
			include($post);
			echo $close;
		}
	}

?>
