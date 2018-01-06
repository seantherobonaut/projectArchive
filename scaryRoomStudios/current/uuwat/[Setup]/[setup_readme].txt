1) Place .htaccess, root_config.php, and index.php into your websites root directory.
	You may copy the contents of these files to your own if necesarry
		(except index.php, that may be modified but not usually added to)

2) Go into the root_config.php and point to your Config::$path['app']

3) Copy the app_config.php to your webapp, and require file location in the root_config.php
	(modify/add lines to it ONLY as needed!)

4) Be sure you have two dbConn files(set in app_config) that hold the static method call:
	DataObject::connect('host', 'user', 'pass', 'dbName');

5) Start setting up your app_init in your webapp's path, or if your project previously had an index.php, rename it to app_init.php

6) Look through the uuwat, root, and app configs to see what other values you can set...and, Go crazy!