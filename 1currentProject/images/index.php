<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Template</title>
		<link rel="stylesheet" type="text/css" href="lib/core.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="fonty"></div>
			<?php
				$dynBg = true;
				if($dynBg)
					include 'lib/dynamicBackground/dynBg.php';

				include 'home.php';
			?>
			
			<script type="text/javascript" src="lib/core.js"></script>
<!-- 			<script type="text/javascript">
				
				$(window).on("load", function()
				{
					setTimeout(function()
					{
						runJs();
					}, 1000);
					setTimeout(function()
					{
						$("#fonty").html('<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,900" rel="stylesheet">');
					}, 2000);
				});
			</script> -->
			<style type="text/css">
				#fontLoadCheck
				{
					position: absolute;
					bottom:0px;
					right:30px;
				}

				#fontBase, #fontA
				{
					font-size: 50px;
					color:white;
				}
			</style>
			 
			 <div id="fontLoadCheck">
			 	<span id="fontBase">FontA</span>
			 	<span id="fontA" style="font-family:'Roboto'">FontB</span>
			 </div>
			 
			 <script type="text/javascript">

				var counter = 0;
				var baseWidth = $("#fontBase").width();
				var fontCheck = setInterval(function()
				{
					var loadFont = $("#fontA").width();
					if(baseWidth == loadFont)
						counter++;
					else
					{
						$("#rezzy").html(baseWidth + "<br>" + loadFont + "<br>" + (counter));
						runJs();
						clearInterval(fontCheck);
					}

				}, 1);
			</script>
			
		</div>
	</body>
</html>