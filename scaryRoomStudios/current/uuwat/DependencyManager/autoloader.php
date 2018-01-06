<?php
	//This file must be required by a file in the root path
	if(!file_exists(Config::$path['app'].'includeList.php'))
	{
		require 'uuwat/FileSearchClass.php';
		require 'IncludeListBuilderClass.php';
		$listBuilder = new IncludeListBuilder;
		$listBuilder->setListLocation(Config::$path['app'].'includeList.php');
		$listBuilder->setPaths(Config::$searchPaths);
		$listBuilder->buildList();
		unset($listBuilder);
	}
	
	function uuwat_autoloader($callName)
	{
		require Config::$path['app'].'includeList.php';
		//if(!empty($globalIncludeList[$callName])) //improve performance by crashing here
			require $globalIncludeList[$callName];
	}
	spl_autoload_register('uuwat_autoloader');
?>