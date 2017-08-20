<?php
	$myquery = mysqli_query($db, "SELECT * FROM newtab WHERE content='Dave'");
    while($row = mysqli_fetch_assoc($myquery))
        echo $row["content"] . "<br>";
?>

