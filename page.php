<?php include('include/header.php'); ?>

<?php 
	if ($content) {
		$file = 'pages/'.$content.'.php';
		include($file);
	} else {
		echo '<strong>Oops, you need to add a query string and associated file, or some default content here!</strong>';
	}
?>

<?php include('include/footer.php'); ?>