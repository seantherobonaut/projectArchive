<?php
	//error_reporting(0); //This turns on and off error reporting.
	require 'connect.php';

	//Fetching data
	$result = $db->query("SELECT * FROM people") or die($db->error);
	if($result->num_rows)
	{
		//Fetch as assoc arrays
		while($rows = $result->fetch_assoc())
		{
		 	echo $rows['id'], ' ', $rows['first_name'], ' ', $rows['last_name'], '<br />';
		}

		//Fetch as objects
		while($rows = $result->fetch_object())
		{
		 	echo $rows->id, ' ', $rows->first_name, ' ', $rows->last_name, '<br />';
		}

		$result->free(); //frees up memory
	}
?>
