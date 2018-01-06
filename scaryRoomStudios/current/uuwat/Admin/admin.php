<?php
	/*TODO (maybe)
		When another page redirects to the admin page.... it should set get param /admin/?redirect=so_n_so 
			Then...when you press submit, this admin login form will send post data of $_GET["redirect"]
				...most tools are located on this page...so don't try this for a while
	*/

	/*
		Planned tools:
		- Global Find and Replace
		- Print out all comments (//TODO) and (blockComment TODO), with their file locations and lines...option to open files externally?
		- build includes list
		- build requestProxies list
	*/
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Admin User Login</title>
		<style type="text/css">
			.tools a
			{
				color:blue;
				margin-right:5px;
			}
		</style>
	</head>
	<body style="font-family: arial">
		
		<a href="/" style="color:blue;text-decoration: none;border:1px solid #999;padding:1px 5px;font-size: 13px;color:black;background-color: #e9e9e9">Home</a>
		<br>
		<a href="/?requestproxy=logout" style="color:blue;text-decoration: none;border:1px solid #999;padding:1px 5px;font-size: 13px;color:black;background-color: #e9e9e9">Logout Home</a>
		<br>
		<a href="/?requestproxy=logout&redirect=/admin" style="color:blue;text-decoration: none;border:1px solid #999;padding:1px 5px;font-size: 13px;color:black;background-color: #e9e9e9">Logout Here</a>
		<br>
		<form method="post" action="/?requestproxy=login" style="border:1px solid gray;display: inline-block;padding:5px;margin-top:7px;margin-bottom:7px;<?php if(!empty($_SESSION['user_data'])) echo 'display:none;';?>">
			<b><u>Admin Login</u>:</b>&nbsp;
			username: <input type="text" name="username">
			password: <input type="password" name="password">
			<input type="hidden" name="root_login" value="true">
			<input type="hidden" name="redirect" value="/admin">
			<input type="submit" value="Login.">
			<br>
			<?php //print out login error
				$message = (!empty($_SESSION['login_error']) ? $_SESSION['login_error'] : null);
				if(!empty($message))
				{
					echo '<div style="text-align:right;border-top:1px solid #999;margin-top:6px;padding-top:2px;padding-left:20px">';
					echo $message;
					echo '</div>';
				}
			?>
		</form>
		<?php
			if(!empty($_SESSION['user_data']))
				echo 'Welcome back '.$_SESSION['user_data']['username'].'!';
		?>
		<br>
		<span class="tools">
			<a href="/admin/?tool=checktables">CheckTables</a>
			<a href="/admin/?tool=buildincludelist">BuildIncludeList</a>
		</span>
		<?php
			if(!empty($_GET['tool']))
			{
				echo '<hr>';
				$tool = 'uuwat/admin/tools/'.$_GET['tool'].'Handler.php';
				if(file_exists($tool))
					require $tool;
				else
					echo 'Tool "',$_GET['tool'],'", does not exist.';
			}
		?>
	</body>
</html>
