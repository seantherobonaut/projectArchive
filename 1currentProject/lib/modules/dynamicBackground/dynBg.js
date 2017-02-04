/*
	Description of how this works...
	TODO...make callback function for window resize, rename some variables in the loop to make more sense
	...wait since you can have multipel classes on something and each() can filter only one....just make dynbg have multiple classes
*/

//!Maybe these pushes won't work with more string items such as tiled
function dynBgGetData(currentObj)
{
	var dataArray = currentObj.text(); //Path, Width, Height, whRatio, hwRatio, Type
	dataArray = dataArray.split(",");
	dataArray.push((dataArray[1]/dataArray[2])); //whRatio
	dataArray.push((dataArray[2]/dataArray[1])); //hwRatio
	dataArray.push(currentObj.attr("class"));
	return dataArray;
}

//(+70) The height of navbars and other gui can compromise fixed positioning
function dynBgOffset(currentObj)
{
	currentObj.height($(window).height() + 70); 
}

function imgFullLoop(currentObj, dataArray)
{
	var ratioA = dataArray[3], ratioB = dataArray[4];

	//Set image dimensions relative to dynbg
	var imgObj = currentObj.children("img");
	imgObj.height(currentObj.height());
	imgObj.width((ratioA * currentObj.height()));

	var objectWidth = currentObj.width();
	var dynBgImgWidth = imgObj.width();
	var adaptiveMargin = (currentObj.width() - imgObj.width())/2;	

	//If image is smaller than screen width, do stuff
	if(objectWidth > dynBgImgWidth) 
	{
		imgObj.css("margin-left", 0);
		imgObj.height((ratioB * currentObj.width()));
		imgObj.width(objectWidth);
	}
	else
		imgObj.css("margin-left", adaptiveMargin);
}

//maybe put this inside the function and insert the name of the desired element into the .each func below as a string
$("#dynBg > .imgFull").each(function()
{
	var dynBgObj = $(this).parent(), dynBgData = dynBgGetData($(this));//Maybe make this a global each?
	dynBgObj.append('<img src="'+dynBgData[0]+'" />');

	dynBgOffset(dynBgObj);
	imgFullLoop(dynBgObj, dynBgData);
	$(window).resize(function()
	{
		dynBgOffset(dynBgObj);
		imgFullLoop(dynBgObj, dynBgData);
	});
});
