<?php
    //If mysql cell "fonts are NOT empty" do something (get current page and stuff like that)
    //Path, type {full,topLeft,half,etc or tiled:data(background-size, repeat x or y...)}
    $fakeMYSQLfontString = "Roboto:300,300i,900 Open+Sans";

    /*if they are set...write out fonts as divs with large fonts size stacking vertically(make sure whitespace no wrap)  <div>Roboto:300,300i,900</div> */
    
    $dynBgData = explode(" ", $fakeMYSQLbgString);

?>
<!-- Break this into client and server folders -->
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

/*
solution...

make box offscreen 
                node.style.fontSize      = '300px';
            // Reset any font properties
            node.style.fontFamily    = 'sans-serif';
            node.style.fontVariant   = 'normal';
            node.style.fontStyle     = 'normal';
            node.style.fontWeight    = 'normal';
            node.style.letterSpacing = '0';

            

            var node = document.createElement("p");
            node.id = "customFontHandler";

function waitForWebfonts(fonts, callback) {
    var loadedFonts = 0;
    for(var i = 0, l = fonts.length; i < l; ++i) {
        (function(font) {
            var node = document.createElement('span');
            // Characters that vary significantly among different fonts
            node.innerHTML = 'giItT1WQy@!-/#';
            // Visible - so we can measure it - but not on the screen
            node.style.visibility      = 'hidden';
            node.style.position      = 'absolute';
            node.style.left          = '-10000px';
            node.style.top           = '-10000px';
            // Large font size makes even subtle changes obvious
            node.style.fontSize      = '300px';
            // Reset any font properties
            node.style.fontFamily    = 'sans-serif';
            node.style.fontVariant   = 'normal';
            node.style.fontStyle     = 'normal';
            node.style.fontWeight    = 'normal';
            node.style.letterSpacing = '0';
            document.body.appendChild(node);

            // Remember width with no applied web font
            var width = node.offsetWidth;

            node.style.fontFamily = font;

            var interval;
            function checkFont() {
                // Compare current width with original width
                if(node && node.offsetWidth != width) {
                    ++loadedFonts;
                    node.parentNode.removeChild(node);
                    node = null;
                }

                // If all fonts have been loaded
                if(loadedFonts >= fonts.length) {
                    if(interval) {
                        clearInterval(interval);
                    }
                    if(loadedFonts == fonts.length) {
                        callback();
                        return true;
                    }
                }
            };

            if(!checkFont()) {
                interval = setInterval(checkFont, 50);
            }
        })(fonts[i]);
    }
};
Use it like:

waitForWebfonts(['MyFont1', 'MyFont2'], function() {
    // Will be called as soon as ALL specified fonts are available
});

if the width changes at all during the loop...then call function...means font loaded(also count how many ms...or cycles)

*/
</script>