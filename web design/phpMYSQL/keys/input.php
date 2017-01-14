<?php
	if(isset($_POST["name"]) && ($_POST["name"] != ""))
	{
		echo "\"" . $_POST["name"] . "\"";
	}
	
	else
		echo "That entry was empty.";
?>