<?php
	/*This script is called when the current page under mysql contains a background image*/
	$dynBgPath = "images/layout/background.jpg";
	$dynBgType = "full";
	$dynBgArray = getimagesize($dynBgPath);
?>

<link rel="stylesheet" type="text/css" href="lib/dynamicBackground/dynBg.css">
<script type="text/javascript">
	var dynBgDataServer = ["<?php echo $dynBgPath;?>", "<?php echo $dynBgType;?>", "<?php echo $dynBgArray[0];?>", "<?php echo $dynBgArray[1];?>"];
</script>
<div id="dynBg"></div>
<script src="lib/dynamicBackground/dynBg.js"></script>