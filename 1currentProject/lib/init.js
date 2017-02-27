function runJs()
{
    $("#wrapper").each(function(){wrapperSetHeight($(this));}); //This just makes the wrapper height of window
	$(".setParentWidth").each(function(){setParentWidth($(this));});
	$(".vertAlign").each(function(){vertAlign($(this));});
	$("#navMenu").each(function(){navMenu($(this));});		
}