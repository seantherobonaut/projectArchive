<?php
	//error_reporting(0);
	require 'connect.php';

	//Reset increment
	//mysqli_query($db, "ALTER TABLE asdf AUTO_INCREMENT = 1");

	//update records
	//mysqli_query($db, "UPDATE asdf SET name='hihihi' WHERE id=4");

	//Insert records
	//$sqlstuff = "INSERT INTO asdf (name, link) VALUES ('filler', 'http://www.google.com/')";
	//mysqli_multi_query($db, $sqlstuff); 

	//Read records
	$results = mysqli_query($db, "SELECT * FROM asdf"); 

	//Count number of rows there are
	$sql="SELECT * FROM asdf";
	$query=mysqli_query($db, $sql);    
	$num=mysqli_num_rows($query);
	echo $num, '<br />';

	//Delete records
	/*		
	$number = 8;	
	$sqlstuff = "DELETE FROM asdf WHERE id={$number}";
	mysqli_query($db, $sqlstuff);
	*/
	
    for($i = 0;$i<$num;$i++) 
    {
    	$rows = mysqli_fetch_assoc($results);
        echo $rows['id'], '&nbsp;&nbsp;&nbsp;<a target="_blank" href ="', $rows['link'], '">', $rows['name'], '</a>','<br>';
    }
?>