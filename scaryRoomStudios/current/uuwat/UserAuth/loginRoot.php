<?php
	/*
		when project first starts, it will require to make a new uuwat user if none is detected
			so...if there isn't a login file here then throw error
	*/

	//TODO Make this more complex later with nested rootUsers sean{[id,user,pass,etc...]},bob{[id,user,pass,etc...]} (user_id's have 00, 01, etc...)
	
	//Keep in mind there might be a problem with conflicting userIDs vs rootIDs
	require Config::$path['app'].'root_login.php'; //user_id, username, password, rank, active
	if($userLoginInput['username'] == $rootLoginArray['username'])
		$loginData = $rootLoginArray;
	else
		$loginData = null;
?>
