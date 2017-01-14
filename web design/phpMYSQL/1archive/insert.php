<?php
	error_reporting(0); //This turns on and off error reporting.
	require 'connect.php';

if(isset($_GET['asdf']))
{

	//do THIS: http://testing.allowed.org/test/?asdf=stephen
	$asdf = trim($_GET['asdf']);
	//$asdf = "Freddie!!!";
	if($insert = $db->query("
		INSERT INTO people (first_name, last_name, bio, created)
		VALUES ('{$asdf}', 'Garrett', 'I\'m a web developer', NOW())
		"))
	{
		echo $db->affected_rows;
	}
	
}

?>
