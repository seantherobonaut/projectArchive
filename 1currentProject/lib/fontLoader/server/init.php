<?php
    /*if they are set...write out fonts as divs with large fonts size stacking vertically(make sure whitespace no wrap)  <div>Roboto:300,300i,900</div> */
    //If mysql cell "fonts" are NOT empty do something (get current page and stuff like that)
    //"font1 font2 font3"

    $fakeMYSQLfontString = "Roboto:300,300i,900 Open+Sans"; //you need to setup an if statment for php/mysql if this value is not empty do something
    $fontLdrData = explode(" ", $fakeMYSQLfontString);
    echo "<div id='fontLdr'>";
        for($counter = 0;$counter < sizeof($fontLdrData);$counter++)
            echo "<span class='font".$counter."'>". $fontLdrData[$counter] ."</span><br>";
    echo "</div>";

?>
<link rel="stylesheet" type="text/css" href="lib/fontLoader/client/fontLdr.css">
<script type="text/javascript" src="lib/fontLoader/client/fontLdr.js"></script>
