<?php
	//error_reporting(0); //This turns on and off error reporting.
	require 'connect.php';

	//updating records
	if($udpate = $db->query("UPDATE people SET last_name = 'Smith' WHERE id = 2"))

	//deleting records
	if($udpate = $db->query("DELETE FROM people WHERE id = 1"))
	{
		echo $db->affected_rows;
	}
?>
