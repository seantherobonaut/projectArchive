<?php
	error_reporting(0);
	session_start();
	require 'lib/serverCore.php';

/*This checks for database connection...split off later...check to see if $db has global scope*/

	if(file_exists('connect/DBdetails.php'))
	{
		require 'connect/DBdetails.php';
		$db = mysqli_connect($host, $user, $pass, $dbname);
		if($db)
			$uuwatContent = "content.php";
	}
	else
		$uuwatContent = "setupDB.php";


	/*Integrate compat php, ...decide all uuwatcontent page before loading...and have function that checks if error is not a string, load php content...or if connection isn't bad choose between compat and content*/
	function loadContent()
	{
		global $uuwatContent;
		if(isset($uuwatContent))
			echo $uuwatContent;
		else
			echo "<h3>There is something wrong with your database connection.<br>Please either edit or delete DBdetails.php and try again.</h3>";
	}

	loadContent();






/*
keep here for reference
foreach ($_POST as $key => $value) 
    $body .= $key . ' -> ' . $value . '<br>';

foreach ($_GET as $key => $value) echo "Key: $key Val: $value<br>";

*/






/*Aquire get/post variables*/
/*	if(!(isset($_GET["page"])))
		$page = "Home";
	else
		$page = $_GET["page"];

$getvar = "page";
$sqlval = "fart";

if($_GET[$getvar] == $sqlval)
	echo "Stinky!";

else
	echo "Not so stinky :(";*/



	
/*Figure out how to get title & favicon later...favicon always has default set*/


/*	$title = "Home";
	$favIcon = "http://www.lakway.org/common/images/st/google_16.png";
	
	if($page == "compatError")
	{
		$title = "Compat Error";
		$uuwatContent = 'compat.php';
	}

	require 'template.php';*/
/* 
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'mypage.php';
	header("Location: http://$host$uri/$extra");
	exit;
*/
?>