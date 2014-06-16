<?php 
$contain = true;
include('include/header.php'); ?>

<p><small>Note: this is basically the ReadMe and will eventually contain examples of how to use things.</small></p>

<h1>Shalom!</h1>
<p>This is boilerplate for wireframing created by me, Lara (<a href="http://notlaura.com">notlaura</a>). Maybe you will like it too!</p> 

<p>I have this kind of linear development process where I start with a blank project for HTML wireframing, nail that down, do some <a href="http://styletil.es">style tiles</a>, usually abandon that and start coding styles, throw in a CMS (problably WordPress which you can't exactly "throw in") and ta da! The blank slate has become the actual website. That's the gist at least, and it kinda works. The point is to keep things flexible enough that you can make changes along the way.</p>

<p><a href="alistapart.com/article/responsive-comping-obtaining-signoff-with-mockups">Responsive Comping</a> FTW.</p>

<p>I know it's the trendiest thing ever to release some mildly complicated bundle of tools and throw it out as a framework or something, and that's pretty much exactly what this is. Except why not? I haven't be that into anyone else's framework so might as well bake my own.</p>

<h2>Tools used:</h2>
<ul>
	<li>Sass</li>
	<li>Grunt</li>
	<li>Bower (nothing is installed but it's there if you want it!)</li>
	<li><a href="http://css-tricks.com/svg-sprites-use-better-icon-fonts/">SVG sprites</a> (broken at the moment, you wanna fix it?)</li>
	<li><a href="http://jeet.gs">Jeet</a> for grids</li>
	<li><a href="https://github.com/lolmaus/breakpoint-slicer">Breakpoint Slicer</a> for, um, breakpoints</li>
	<li>Normalize</li>
	<li>Some custom-ish typography and grid stuff (inspired by <a href="http://markboulton.co.uk">Mark Boulton</a>)</li>
	<li>Probably other things</li>
</ul>


<h2>A little about the PHP bits</h2>

<p>In order to keep the index and other page templates as clean as possible, I made a PHP variable to conditionally echo the wrapper tag if you want it (e.g. you might only want it on select main content if you are doing full width pics and stuff.)</p>

<p>There is also include/helpers.php where you can, guess what, write some helper functions. I'll put some examples in there in future.</p>

<p>
	<small>P.S. Do you have any idea how delicious this "masala chia frothed with almond milk" thing I am drinking is? I mean, it was $5 but totally worth it.</small>
</p>

<?php include('include/footer.php'); ?>