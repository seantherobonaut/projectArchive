
<!-- 	Ignore bootstrap, just go with functions, mobile first, less flickering...not many people refresh page
	Also, make session for "loaded" to at least make a delayed blink in..or fade in...no fade in, each page has this problem...unless no refresh change content...YESSS..no, new urls refresh page
 -->

<!-- Custom Styles -->
<!-- WAYYY FASTER! -->
<!-- <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Shadows+Into+Light" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,900" rel="stylesheet"> -->

<style type="text/css">
	body
	{
		background-color: #010101;
		font-family: sans-serif;
	}

	.partition
	{
		padding:0px 10px;
		min-width: 340px;	
	}

	#main{/*min-width: 320px;*/}

	p{color:white;}

	.logo
	{
		font-family: sans-serif;
		font-size: 90px;
		color:#ddd;
		font-weight: 900;
		line-height: 70px;
	}

	.logoSub
	{
		font-family: 'Roboto', sans-serif;
		font-style: italic;
		font-weight: 300;
		color:white;
		white-space: nowrap;
		line-height:40px;
		margin-left:30px;
		text-shadow:0px 0px 15px gold,0px 0px 15px gold;
	}

	/*Outer Nav*/
	#outerNav {padding-top:30px;}
	#outerNav > div:nth-child(1){float:left;}
	#outerNav > div:nth-child(2){float:right;margin-right:15px;}

	#mobileButton
	{
		position: absolute;
		width:40px;
		top:32px;
		right:32px;
	}

	#mobileButton > div:nth-child(even)
	{
		height:9px;
	}

	#mobileButton > div:nth-child(odd)
	{
		height: 5px;
		background-color:white;
	}

	#mobileButton
	{
		display: none;
	}

	.links
	{
		font-family: 'Roboto', sans-serif;
		font-size:20px;
		font-weight: normal;
		color:#ccc;
		margin:0px 10px;
	}

	.links:nth-child(1){margin-left:0px;}
	.links:nth-last-child(1){margin-right:0px;}

	@media screen and (max-width: 1020px)
	{
		#outerNav{padding-top:10px;}

		#mobileButton{top:32px;right:22px;}
	}
</style>
				<!--
					To improve loading time, change this into an image and load less fonts(no bold900) 
					Additionally, if the screen width becomes too small, just change size of image...no positioning absolute of 
					nav menu icon
				-->

<div class="partition">
	<div class="module" id="main">
		<div id="outerNav">
			<div>
				<span class="setParentWidth">
					<h1 class="logo">DJMC</h1>
					<h6 class="logoSub">"...music to believe in"</h6>								
				</span>
			</div>
			<div style="border:1px solid blue">
				<span class="setParentWidth" id="navMenu" style="border:1px solid white">
					<a class="links" href="">Music</a>
					<a class="links" href="">About</a>
					<a class="links" href="">Events</a>
					<a class="links" href="">Photos</a>
					<a class="links" href="">Legal</a>				
				</span>
			</div>
			<br style="clear:both">
			<div id="mobileButton">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
 		<p id="rezzy">Result...</p>
	</div>
</div>
<!-- 
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
-->