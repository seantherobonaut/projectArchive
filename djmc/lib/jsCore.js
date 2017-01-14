/*
	Plans:
		- Fix functions that are "for each"..and once called update always?
		- Add functions for visual effects
		- Split multiple jsCore files. Perhaps seperate for fancy effects and actual functionality 
*/

/*
	Ever since some small devices disabled support for scrolling backgrounds
	and css background-cover I found a work around by for that by making the 
	background image a physical elements that moves around.
*/

//Adaptive code for a background image...needs more commenting
//Low priority - eventually adapt to suit no inserted image tag, just resize background image using background-size and use percentages to find height and width ratios using external functions.
function dynamicBackground()
{
	if(myImgType == "full")
	{
		$(".bgMain").html("<img src='" + myImgPath + "' />");
		$(".bgMain img").each(function()
		{
			//Calculate ratios
			whRatio = myImgWidth / myImgHeight;
			hwRatio = myImgHeight / myImgWidth;

			//Set dimensions relative to window height
			$(this).height($(window).height());
			$(this).width((whRatio * $(window).height()));

			screenWidth = $(window).width();
			bgImgWidth = $(this).width();
		    adaptiveMargin = (screenWidth - bgImgWidth)/2;

		   	$(this).css("margin-left", adaptiveMargin);
		    
			if( screenWidth > bgImgWidth )
			{
				$(this).css("margin-left", 0);
				$(this).height("auto");
				$(this).width(screenWidth);
			}
		});
	}
	else
	{
		$(".bgMain").css("background-image", "url(" + myImgPath + ")");
		$(".bgMain").css("background-repeat", "repeat");
	}
}

//Vertically align elements
function verticalAlign()
{
	$(".verticalAlign").each(function()
	{
		var parentHeight = $(this).parent().height();
		var elementHeight = $(this).outerHeight();
		var push = parentHeight/2 - elementHeight/2;
		$(this).css("margin-top", push);
	});
}


//Gets accurate width of things inside elements
function getInnerWidth(inputElement)
{
	// 1) Prevents element from wrapping to get accurate measurement
	//Examines status of white-space and stores it, then changes it
	var storedWhiteSpace = $(inputElement).css("white-space");
	if( storedWhiteSpace != "nowrap" )	
		$(inputElement).css("white-space", "nowrap");

	// 2) Changes display to inline-block to measure width
	//Examines status of display and stores it, then changes it
	var storedDisplay = $(inputElement).css("display");
	if( storedDisplay != "inline-block" )	
		$(inputElement).css("display", "inline-block");

	var measureWdith = $(inputElement).width();

	//Restores initial values
	$(inputElement).css("white-space", storedWhiteSpace);
	$(inputElement).css("display", storedDisplay);

	return measureWdith; //+1 pixel when setting width to prevent wrapping
}

/* =================== TO BE FIXED UP ====================== */

//TODO: rewrite this function to only target one div and automatically input the immediate child divs as array inputs
//Center the block elements and float them to either right or left unless they are closer than a given distance
function leftrightAdapt(leftEle, rightEle, LRdistanceBuffer, postFunc)
{
	$(leftEle).css("margin", "auto");
	$(rightEle).css("margin", "auto");
	//TODO: optimize to detect border width automatically
	if( ($(leftEle).width() + $(rightEle).width() + LRdistanceBuffer + 4 ) < $(leftEle).parent().width() )  //The 4 is the width of all borders as 1px each...try outerWidth()?
	{
		$(leftEle).css("float", "left");
		$(rightEle).css("float", "right");
	}
	else
	{
		$(leftEle).css("float", "none");
		$(rightEle).css("float", "none");
	}

	//This makes it so any elements under the left and right adapt will display properly
	//Check if there is a <br> with clear:both, if there isn't create one
	if( $(rightEle).next().attr('class') != "clearbreak" )
	{
		$(rightEle).after("<br class='clearbreak' style='clear:both' />");
	}
	
	//Hide the breakline if elements are not floating.
	if( $(rightEle).css("float") == "right" )
	{
		$(rightEle).next(".clearbreak").css( "display", "inline" );
	}
	else
	{
		$(rightEle).next(".clearbreak").css( "display", "none" );
	}

	//Optional parameter execution. Will only fire if there is a parameter
	if ( !(postFunc === undefined) )
	{
		postFunc();
	}
}
