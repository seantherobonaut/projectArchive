<?php
	//This may only be included by root_config!
	Config::$path['root'] = str_replace('uuwat', '', __DIR__); //considered bad practice to use $_SERVER['DOCUMENT_ROOT']
	Config::$path['uuwat'] = Config::$path['root'].'uuwat/';
	Config::$searchPaths['uuwat'] = Config::$path['uuwat'];

	Config::$module['crashHandler'] = Config::$path['uuwat'].'CrashManager/crashHandler.php';
	Config::$module['displayCrash'] = Config::$path['uuwat'].'CrashManager/displayCrash.php';
	Config::$module['autoloader'] = Config::$path['uuwat'].'DependencyManager/autoloader.php';
?>
