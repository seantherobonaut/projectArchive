<?php
	error_reporting(0); //This turns on and off error reporting.
	require 'connect.php';

	//exectute this http://testing.allowed.org/test/?last_name=Garrett&id=8
	if(isset($_GET['last_name'], $_GET['id']))
	{
		$last_name = trim($_GET['last_name']);
		$id = trim($_GET['id']);

		$people = $db->prepare("SELECT first_name, last_name FROM people WHERE last_name = ? AND id = ?");
		$people->bind_param('si', $last_name, $id);
		//Or $people->bind_param('i', $id);
		$people->execute();

		$people->bind_result($first_name, $last_name);

		while($people->fetch())
		{
			echo $first_name, ' ', $last_name, '<br />';
		}
	}
?>
