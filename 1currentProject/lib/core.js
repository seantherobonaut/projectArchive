function runJs()
{
    $("#wrapper").each(function(){wrapperSetHeight($(this));}); //This just makes the wrapper height of window
	$(".setParentWidth").each(function(){setParentWidth($(this));});
	$(".vertAlign").each(function(){vertAlign($(this));});
	$("#navMenu").each(function(){navMenu($(this));});		
}

function wrapperSetHeight(currentObj)
{
    wrapperSetHeightLoop(currentObj);
    $(window).resize(function(){wrapperSetHeightLoop(currentObj);});

    function wrapperSetHeightLoop(inheritObj)
    {
        inheritObj.css("min-height", $(window).height() - 1); //So the navbar doesn't jump as much
    }
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
	
	navSwitch(currentObj, breakPoint);
	$(window).resize(function()
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