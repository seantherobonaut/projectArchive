<?php
	//basic includes and session utilities
	session_start();
	require 'root_config.php';
	require Config::$module['autoloader'];
	require Config::$module['crashHandler'];
	require 'uuwat/Base/lastLocation.php';

	//if there is no crash, request proxy, or /admin then load project from the config path
	if(!isset($_SESSION['crashData']))
	{
		if(empty($_GET['requestproxy']))
		{
			require 'uuwat/Base/homeRedirect.php';

			if($_GET['page'] == 'admin')
				require 'uuwat/Admin/admin.php';
			else
				require Config::$path['app'].'app_init.php'; //Main project starts here...
		}
		else
			require 'uuwat/RequestProxyManager/requestProxyLoader.php';
	}
	else
		require Config::$module['displayCrash'];
?>
