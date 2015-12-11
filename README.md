#Hi!
This is boilerplate for wireframing created by me, Lara! Maybe you will like it too. I have this kind of linear development process where I start with a blank project for HTML wireframing, nail that down, do some style tiles, start adding styles, throw in a CMS (not that it's ever that straightforward) and it becomes the actual website. That's the gist at least.

##Tools used:
* Sass
* Grunt
* Normalize
* Probably some other stuff


##A little about the PHP stuff:

In order to keep the index and other page templates flexible and block-level friendly, there is a ```$contain``` variable to conditionally echo the wrapper tag if you want it (e.g. you might only want it on select main content if you are doing full width pics and stuff). Not sure if it's useful or annoying.

Otherwise, we have some includes in, guess what, the includes folder:

* header.php - has standard ```<head>``` stuff and ```<header>``` markup
* footer.php - include scripts, ```<footer>``` markup
* nav.php - the nav!
* helpers.php - put your helper functions in here. Like, maybe some conditionals or arrays of content.

##How to use this:

Coming soon...but in a nutshell, clone into your local server htdocs, and go to it! It's a Sassified, so you'll need to have that set up as well. 

##Todos:

* Add a production grunt task - took out the minification because this is meant for development and it's potentially easier to work from expanded files (for inspection and whatnot)
* Add some example functions in helper.php
* Maybe put in some starter styles for forms and typography - not _styled_, just the selectors
* Make some Github issues instead of this todos list
