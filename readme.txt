This is a very simple script for creating a dynamic sidebar for any php website.

I built this because I needed to use SimpleXML to parse and serve a different sidebar feed for each page of my installation. You can use this to serve any type of content you want.

The way it works is simple:

1. Include functions.php in the header
2. Functions.php has a function for each feed load
3. Sidebar.php gets current page, then calls a function specific to that page. 

### Installation ###

To install:

1. Start with functions.php and create the individual sidebar instances.
	Name the functions anything you wish.
2. Rename the functions in sidebar.php to match functions.php
	Determine which pages you'll be loading. If you're smart, you can strip the folders/prefixes from the $currentpage variable.
3. Upload to your server.

### Contact ###

I'm just a beginner, but very open to have this forked and improved. Feel free to contact me: 

Nathan Hangen
http://virtuousgiant.com
nathan@virtuousgiant.com

