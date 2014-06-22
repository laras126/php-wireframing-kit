<?php 
$contain = true;
include('include/header.php'); ?>
	
    <?php printCallout("Updates on the Sky.", "Sometimes we write about the sky."); ?>    
	<?php 
		printPostExcerpt("Smashing Microtalk!", "June 16, 2014", "This is the smallest talk in the universe. Let's get some bier!"); 
	
		printPostExcerpt("New Planes", "June 11, 2014", "Southwest airlines recently bought some new planes, they are pretty sweet! And they are still serving tons of free snacks on board. Unlike most other airlines, amirite?"); 
		printPostExcerpt("Black Hole's birthday!", "June 01, 2014", "Our good friend, Black Hole, has just turned 30 billion years old and doesn't look a day over 13! Let's wish him a very happy birthday with some cake too."); 

		for ($i=0; $i<=5; $i++) {
			printPostExcerpt("Black Hole's birthday!", "Jun 1".$i.", 2014", "Our good friend, Black Hole, has just turned 30 billion years old and doesn't look a day over 13! Let's wish him a very happy birthday with some cake too."); 
		} 
	?>

<?php include('include/footer.php'); ?>