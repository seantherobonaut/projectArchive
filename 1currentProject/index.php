<!-- 
    On serverside...check table rows for background and font...if they contain data use php to paste in elements
    you just include the packages...they do the checks and take care of the rest

    get page...find rows...if not empty then do something





    fix fontloader code a bit to make it just one element check...do others later

    move php background check code check to the file (it will get current page then check it it has a background)...fake db

    make font loader like the dynbg checking mysqldb first...fake db

	make big change with the breaker divs... class (breakEvent func:stack)

    the logo to shrink when it is too small...and make sure the right does not need to be posisiton absolute


    bring him over and discuss mobile menu...panel come in from the side...or links just drop down like on brandons?(mentioned they need background covering)

	GET FINISHED WITH FRONT END!!!
		Make the admin page...simple form login...style it

		make copyright...and discuss if look is ok
		discuss with him the copyright look and clarify what i


	Back end:
		Get login working
		make mysql template pages...
			if get = something...that entry is of page type
				if of this page type
					php is the tempalte and mysql stores the pages as is...no templates in mysql
					...!!!FIGURE THIS OUT LATER!!!


 -->
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