<?php
	//You should almost never change this file.

	session_start();
	require 'root_config.php';
	require Config::$module['autoloader'];
	require Config::$module['crashHandler'];
	require 'uuwat/Base/lastLocation.php';

	if(!isset($_SESSION['crashData']))
	{
		if(empty($_GET['requestproxy']))
		{
			require 'uuwat/Base/homeRedirect.php';

			if($_GET['page'] == 'admin')
				require 'uuwat/Admin/admin.php';
			else
				require Config::$path['app'].'app_init.php';
		}
		else
			require 'uuwat/RequestProxyManager/requestProxyLoader.php';
	}
	else
		require Config::$module['displayCrash'];
?>
