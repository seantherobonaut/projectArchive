<script type="text/javascript">var fontArray = ["Roboto:300,300i,900", "Open+Sans"];</script>
<style type="text/css">
	#fontLoadCheck
	{
		position: absolute;
		bottom:0px;
		right:0px; 
		/*z-index: -100;*/
	}

	#fontA
	{
		font-size: 100px;
		color:white;
	}
</style>
 
<div id="fontLoadCheck">
	<span id="fontA">Font</span>
</div>

<script type="text/javascript">
	function initJs()
	{
	    var counter = 0;
	    var startWidth = $("#fontA").width();

	    WebFont.load({google: {families:startWidthrray}});
	    var fontCheck = setInterval(function()
	    {
	        var fontB = $("#fontB").width();
	        if(startWidth == fontB)
	            counter++;
	        else
	        {
	            $("#rezzy").html(startWidth + "<br>" + fontB + "<br>" + (counter));
	            runJs();
	            clearInterval(fontCheck);
	        }
	    }, 1);   
	}
</script>