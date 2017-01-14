<?php
	if(isset($_GET['id']))
		$student = $_GET['id'];
	else
		$student = "null";

	function callname($uInput)
	{
		if($uInput != "null")
			return " - " . $uInput;
	}

	if($student == "seanleapley")
	{
		$heading = "Logical Fallacy Presentation";
		$linkanchor = "https://docs.google.com/presentation/d/1pOoio5BO0nMzqv-MGkC2kmyXjV3qpQI7Y7idvi2IEBk/edit?usp=sharing";
		$linktitle = "Presentation 1";
	}
	else
	{
		$heading = "";
		$linkanchor = "";
		$linktitle = "";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LRCCD<?php echo callname($student);?></title>
		<style type="text/css">
			html, body
			{
				margin:0px;
				padding:50px 20px;
				font-family: arial;
			}

			#wrapper
			{
				width:100%;
				max-width: 500px;
				background-color: lightgray;
				border:1px dashed gray;
				margin:auto;
				padding:15px;
				box-sizing: border-box;
				border-radius: 5px;
			}

			a.link
			{
				color:darkblue;
			}

			div.heading
			{
				font-size:20px;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div class="heading"><?php echo $heading;?></div>
			<ul>
				<li>
					<a class="link" href="<?php echo $linkanchor;?>"><?php echo $linktitle;?></a>					
				</li>
			</ul>
		</div>
	</body>
</html>