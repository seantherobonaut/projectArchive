<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Sean Leapley">
		<title>Template</title>
		
		<link rel="stylesheet" type="text/css" href="lib/core.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		<script type="text/javascript" src="lib/init.js"></script>
		<script type="text/javascript" src="lib/core.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<?php
				//include 'test.php';
				//include 'lib/dynamicBackground/server/init.php';
				include 'lib/fontLoader/server/init.php';
				//include 'home.php';
			?>
			<p id="myres"></p>
		</div>
		<script type="text/javascript">runJs();</script>
	</body>
</html>