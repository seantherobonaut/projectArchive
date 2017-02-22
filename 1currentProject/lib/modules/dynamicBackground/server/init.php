<?php
	//If mysql cell "backgroundImage is NOT empty" do something (get current page and stuff like that)
	//Path, type {full,topLeft,half,etc or tiled:data(background-size, repeat x or y...)}
	$fakeMYSQLbgString = "images/layout/background.jpg,imgFull";
	
	$dynBgData = explode(",", $fakeMYSQLbgString);
	$dynBgDims = getimagesize($dynBgData[0]);

	$dynBgPath = $dynBgData[0];
	$dynBgType = $dynBgData[1];
	$dynBgWidth = $dynBgDims[0];
	$dynBgHeight = $dynBgDims[1];

	if( count($dynBgData) < 3)
		echo '<div id="dynBg"><div class="'.$dynBgType.'" style="display:none;">'.$dynBgPath.','.$dynBgWidth.','.$dynBgHeight.'</div></div>';
	//else
		//echo 'tiled div stuffs';

	/*
		echo mytag(data)...returns as a div tag	
		
		background-repeat:repeat-y;
		background-size:50% 70px;
		background-position:top right;
	*/
?>

<link rel="stylesheet" type="text/css" href="lib/modules/dynamicBackground/client/dynBg.css">
<script src="lib/modules/dynamicBackground/client/dynBg.js"></script>
