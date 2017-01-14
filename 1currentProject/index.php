<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Sean Leapley">
		<title>Template</title>
		
		<link rel="stylesheet" type="text/css" href="lib/core.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<?php
				$dynBg = true;
				if($dynBg)
					include 'lib/dynamicBackground/dynBg.php';

				include 'home.php';
			?>
		</div>
		<script type="text/javascript" src="lib/core.js"></script>
		<script type="text/javascript">initJs();</script>
	</body>
</html>