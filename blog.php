<?php include('include/header.php'); ?>

<h2>Hola!</h2>
<p>Hey, here's a blog! There are a few ways you could include posts in here, but here's one. Remember that it's a prototype, so your code doesn't need to be squeaky clean or efficient.</p>

<p>This way is located in <code>helpers.php</code> and is a loop through the <code>posts</code> directory.</p>

<?php 
	$open = '<article class="post">';
	$close = '</article>';
	printContent('posts', $open, $close); 
?>

<?php include('include/footer.php'); ?>