<?php
	//If mysql cell "backgroundImage is NOT empty" do something (get current page and stuff like that)
	//Path, type {full,topLeft,half,etc or tiled:data(background-size, repeat x or y...)}
	$fakeMYSQLbgString = "images/layout/background.jpg,full";
		
	$dynBgData = explode(",", $fakeMYSQLbgString);
	$dynBgDims = getimagesize($dynBgPath);

	$dynBgPath = $dynBgData[0];
	$dynBgType = $dynBgData[1];
	$dynBgWidth = $dynBgDims[0];
	$dynBgHeight = $dynBgDims[1];

	/*
		For the tiled stuffs (possibilities)
		background-repeat:repeat-y;
		background-size:50% 70px;
		background-position:top right;

		When trying to write out at tag from php just to an echo mytag(data)...that function returns a tag with that data...DUH!!!
	*/

	if( count($dynBgData) < 3)
		echo '<div id="dynBg" style="visibility:hidden;"><img class="dynBg-'. $dynBgType . '" src="'. $dynBgPath .'" style="width:'. $dynBgWidth .'px;height:'. $dynBgHeight .'px;"></div>';
	//else
		//echo 'tiled div stuffs';
?>

<link rel="stylesheet" type="text/css" href="lib/modules/dynamicBackground/dynBg.css">
<script src="lib/modules/dynamicBackground/dynBg.js"></script>