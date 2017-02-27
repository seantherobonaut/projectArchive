function execResize(callback)
{
    if ( !(callback === undefined) )
    {
        callback();
        $(window).resize(function()
        {
            callback(); 
        });
    }
}

function wrapperSetHeight(currentObj)
{
    execResize(function()
    {
        currentObj.css("min-height", $(window).height() - 1); //So the navbar doesn't jump as much
    });
}

function setParentWidth(currentObj)
{
	currentObj.parent().width(currentObj.outerWidth());
}

function vertAlign(currentObj)
{
	currentObj.css("margin-top", (currentObj.parent().height()/2 - currentObj.outerHeight()/2));
}

function navMenu(currentObj)
{
	var extra = currentObj.parent().css("margin-right");
	extra = extra.replace("px", "");
	extra = parseInt(extra);
	var widthBuffer = 20;
	var logo = currentObj.parent().parent().children("div:nth-child(1)").outerWidth();
	var nav = currentObj.parent().outerWidth();
	var breakPoint = logo + nav + extra + widthBuffer;
	
    execResize(function()
    {
	   navSwitch(currentObj, breakPoint);
    });

	function navSwitch(inheritObj, bufferLimit)
	{
		var condition = inheritObj.parent().parent().width() - bufferLimit;
		if(condition < 0)
		{
			inheritObj.parent().css("display", "none");
			$("#mobileButton").css("display", "block");
		}
		else
		{
			inheritObj.parent().css("display", "block");
			$("#mobileButton").css("display", "none");
		}
		vertAlign(inheritObj.parent());
	}
}
