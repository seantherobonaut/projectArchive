<?php
	include 'init.php';

	if(empty($_POST === false))
	{
		/*Awesome shorthand logic*/
		$postUser = ((isset($_POST["user"]) && !empty(trim($_POST["user"]))) ? true : false);
		$postPass = ((isset($_POST["pass"]) && !empty(trim($_POST["pass"]))) ? true : false);

		/*Make mysql query, and if both values return true, rows will equal 1*/
		if($postUser && $postPass)
		{
			$mysqlPostUser = mysqli_real_escape_string($db, $_POST["user"]);
			$mysqlPostPass = mysqli_real_escape_string($db, $_POST["pass"]);
			if((mysqli_num_rows(mysqli_query($db, "SELECT * FROM logins WHERE username='{$mysqlPostUser}' AND password='{$mysqlPostPass}'"))) > 0)
			{
				$_SESSION["logged_in"] = 1;
				$_SESSION["active_user"] = $_POST["user"];
			}
			else
			{
				$_SESSION["logged_in"] = 0;
				$_SESSION["active_user"] = "nope";
			}
			header("Location: /");
		}

		/*Prevents browser asking for resubmit if only one value is submitted*/
		if( $postUser xor $postPass )
			header("Location: /");
	}
?>