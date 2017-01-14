//This ensures there will always be specified margin surrounding the content no matter what size the screen is.
var containerMaxWdith = 1000;
var edgeCushion = 25;
function containerResize()
{
	if($("html").width() < containerMaxWdith+edgeCushion*2)
	{
		$("#navbar").width( $("html").width()-edgeCushion*2);
	}
	else
	{
		$("#navbar").width(containerMaxWdith);
	}
}