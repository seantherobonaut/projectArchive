<?php
	$host = 'mysql7.000webhost.com';
	$user = 'a2799183_test';
	$pass = 'asdfasdf1';
	$dbname = 'a2799183_test';

	$db = mysqli_connect($host, $user, $pass, $dbname);

	if(!$db)
		echo 'Failed.', '<br />', mysqli_connect_error(), '.<br />';
	else
		//echo 'Success!', '<br />';
?>