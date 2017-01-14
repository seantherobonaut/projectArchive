<?php
	include 'init.php';

	/*Fill in values if not set*/
	if( !( isset($_SESSION["logged_in"]) && isset($_SESSION["active_user"]) ) )
	{
		$_SESSION["logged_in"] = 0;
		$_SESSION["active_user"] = "None";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper" class="box">
			<form class="box text" method="post" action="login.php">
				<div class="box inputs">
					<div class="left row box text">Username: </div>
					<div class="right row box"><input class="inline text" type="text" name="user" autocomplete="off" placeholder="..."></div>
					<br style="clear:both">
				</div>
				<div class="box inputs">
					<div class="left row box text">Password: </div>
					<div class="right row box"><input class="inline text" type="password" name="pass" autocomplete="off" placeholder="..."></div>
					<br style="clear:both">
				</div>
				<input type="submit" value="Login" style="float:right;margin-top:5px" class="text">
				<br style="clear:both">
			</form>
			<div class="box text" style="padding-top:5px">
				<?php echo "Logged in:" . $_SESSION["logged_in"] . "<br>" . "Current User:" . $_SESSION["active_user"];?>
			</div>
		</div>
	</body>
</html>
