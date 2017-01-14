/*
	If the get request calls a page that has a background image, php gets
	the image type, path, and dimensions and then puts it into a javascript
	array called dynBgDataServer. Next, php inserts and empty div tag with
	an id of "dynBg". Finally, this javascript file included scans for
	any tags with an id of "dynBg" and runs the respective code.
*/
$("#dynBg").each(function(){dynBg($(this));});

//copy data, calc ratios, make offset, insert image, start dynBg processes and run window resize loop
function dynBg(currentObj)
{
	var dynBgData = dynBgDataServer.slice(0);

	//Calculate ratios
	var whRatio = dynBgData[2] / dynBgData[3];
	var hwRatio = dynBgData[3] / dynBgData[2];

	dynBgOffset(currentObj);
	dynBgInit(currentObj, dynBgData);
	dynBgLoop(currentObj, dynBgData, whRatio, hwRatio);

	$(window).resize(function()
	{
		dynBgOffset(currentObj);
		dynBgLoop(currentObj, dynBgData, whRatio, hwRatio);
	});
}

//(+70) The height of navbars and other gui can compromise fixed positioning
function dynBgOffset(inheritObj)
{
	inheritObj.height($(window).height() + 70); 
}

//If type = case run code
function dynBgInit(inheritObj, dataArray)
{
	switch(dataArray[1])
	{
		case "full":
			//Insert image
			inheritObj.html('<img src="' + dataArray[0] + '" />');
			break;
		default:
			break;
	}
}

//Loop that runs on window resize and document ready (The full Monty)
function dynBgLoop(inheritObj, dataArray, ratioA, ratioB)
{
	switch(dataArray[1])
	{
		case "full":
			//Set image dimensions relative to dynbg
			inheritObj.children("img").height(inheritObj.height());
			inheritObj.children("img").width((ratioA * inheritObj.height()));

			var objectWidth = inheritObj.width();
			var dynBgImgWidth = inheritObj.children("img").width();
			var adaptiveMargin = (inheritObj.width() - inheritObj.children("img").width())/2;	

			//If image is smaller than screen width, 
			if(objectWidth > dynBgImgWidth)
			{
				inheritObj.children("img").css("margin-left", 0);
				inheritObj.children("img").height((ratioB * inheritObj.width()));
				inheritObj.children("img").width(objectWidth);
			}
			else
				inheritObj.children("img").css("margin-left", adaptiveMargin);
			break;
		default:
			break;
	}
}
