function pageInit()
{
	$(document).ready(function()
	{
		runLoadResize();
		verticalAlign();
	});
}

function runLoadResize()
{
	$(window).on("resize", function()
	{
		verticalAlign();
		dynamicBackground();
	});
}