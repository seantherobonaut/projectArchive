//Dynamically updating status readout.
$(window).on("load resize", function()
{	
	setTimeout(function()
	{
		$("#result").html(
			"html width: " + $("html").width() +
			"<br />navlogo width: " + $("#navlogo").width() +
			"<br />navbar width: " + $("#navbar").width() +
			"<br />navlinks width: " + $("#navlinks").width() +
			"<br />navbar height: " + $("#navbar").height() +
			"<br />navlinks height: " + $("#navlinks").height() +
			"<br />push: " + ($("#navbar").height()/2 - ($("#navlinks").height()+2)/2) +
			"<br />width of all ele: " + mywidth +
			"<br />navlinks display: " + $("#navlinks div").css("display")
		);
	}, 100);
});