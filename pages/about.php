<h2>About the <code>page.php</code> template.</h2>

<p>This template is for pages. To create content for a new page, you can add a file to the <code>pages/</code> directory named <code>content-whatever.php</code>. Then when you add a query string to <code>localhost/page.php</code>, it will include that file's content. For example, if your directory looks like this:</p> 

<pre>
	assets
	includes
	pages
	- content-about.php
	- content-contact.php
</pre>

<p>And your URL was this <code>http://localhost/page.php?content=about</code>, the body of this file will print the contents of the <code>pages/content-about.php</code> file.</p>

<p>This query string strategy can <em>pretty</em> easily be applied to other kinds of content like post snippets or a series of e-commerce products. See the examples in <code>include/helpers.php</code> for some ideas.</p>