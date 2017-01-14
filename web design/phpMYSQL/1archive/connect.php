<?php
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$dbname = 'mytestdb';

	$db = mysqli_connect($host, $user, $pass, $dbname);

	if(!$db)
		echo 'Failed.', '<br />', mysqli_connect_error(), '.<br />';
	else
		//echo 'Success!', '<br />';
?>