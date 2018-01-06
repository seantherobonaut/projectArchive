<?php
	//redirect to home if there is no error
	if(!isset($_SESSION['crashData']))
	{
		header('Location: /');
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo (!empty($_SESSION['crashData']['type']) ? $_SESSION['crashData']['type'].'!' : 'Crash!');?></title>
	</head>
	<body>
		<?php
			echo 'Sorry, something went wrong. Please try again later.<br>';

			//If you aren't admin, only see 'Sorry, something...'
			require 'uuwat/Base/htmlPrinter.php';
			if(!empty($_SESSION['user_data']['rank']))
				if($_SESSION['user_data']['rank'] == 'admin')
					echo arrayOut($_SESSION['crashData']);

			//TODO "what would you like to do? click for last location, for admin page, for homepage..."

			unset($_SESSION['crashData']);
		?>
	</body>
</html>
