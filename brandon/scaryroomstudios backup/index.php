<?php
	if(isset($_GET["page"]))
		$activePage = $_GET["page"];
	else
		$activePage = "Home";
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $activePage;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="images/layout/icon.png" />

		<meta name="description" content="Scary Room Studios - UsVsU">
		<meta name="keywords" content="scaryroomstudios,brandondominquez,rap,d-rock,usvsu">
		<meta name="author" content="Sean Leapley">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="js/adaptive.js"></script>
		<script type="text/javascript">
			//TODO if 'page' does not match any known pages, return to home
			currentPage = "<?php echo $activePage;?>";
			$.ajaxSetup ({cache: false});
		</script>

		<link rel="stylesheet" type="text/css" href="css/layout.css" />
		<link rel="stylesheet" type="text/css" href="css/navbar.css" />
	</head>
	<body>
		<div class="partition" id="header" style="padding-top:5px;padding-bottom:5px">
			<div id="navbar">
				<!-- TODO detect the largest width of child elements and set it as the minimum width for the parents to prevent overflowing text. -->
				<!-- TODO Collapse navlinks into icons before making a mobile menu -->
				<!-- TODO make text glow not hidden by edge -->
				<!-- TODO does new scrollbar affect inner/outer width? -->
				<!-- 
					TODO detect if scrollbar is present (if ele.scroll) then get the width to fix calculations.
					It is happening becaus the content loads and enables scrolling after the layout has adapted
				-->
				<div id="navlogo" style="white-space:nowrap">
					<!-- This button is default invisible and only becomes visible when navlinks divs are displayed as block elements -->
					<img src="images/layout/logo.png" style="display:inline-block;height:60px;vertical-align:middle;cursor:pointer" onclick="window.open('?page=Home','_self');" />
					<div id="mobileMenu" style="color:white;display:none;vertical-align:middle;cursor:pointer;font-size:18px;font-family:sans-serif;padding:0px 5px;margin-left:10px" onclick="$('#navlinks').slideToggle(300);">
						Menu
						<img src="images/layout/mobile_menu_icon.png" style="vertical-align:middle;border:1px solid white;border-radius:6px;display:inline-block;width:20px;padding:5px" />
					</div>
				</div>
				<div id="navlinks">
					<div onclick="window.open('?page=Home','_self');">Home</div>
					<div onclick="window.open('?page=About','_self');">About</div>
					<div onclick="window.open('?page=Studio','_self');">Studio</div>
					<div onclick="window.open('?page=Productions','_self');">Productions</div>
					<div onclick="window.open('?page=Contact','_self');">Contact</div>
				</div>
			</div>
		</div>
		<div class="partition" style="margin-bottom:0px">
			<div id="main">
				<div id="content">
					<!-- Content is loaded here -->				
				</div>
			</div>
		</div>
		<div class="partition" style="margin-top:0px;padding-top:7px;">
			<div id="footer">
				<div id="copyright">
					<!-- Some crazy white-space stuff to make sure the lines only break before "All rights reserved." -->
					<div style="white-space:nowrap;display:inline-block">
						Copyright &copy;
						<script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>
						Scary Room Studios. 
					</div>
					<div style="white-space:nowrap;display:inline-block">
						All rights reserved.
					</div>
				</div>
				<div id="socmedia">
					<img src="images/socmediaicons/facebook.png" onclick="window.open('http://www.facebook.com/brandominguezPRO','_blank');" />
					<img src="images/socmediaicons/soundbetter.png" onclick="window.open('https://soundbetter.com/profiles/18055-brandon-dominguez-productions','_blank');" />
					<img src="images/socmediaicons/vimeo.png" onclick="window.open('http://www.vimeo.com/Brandominguez','_blank');" />
					<img src="images/socmediaicons/soundcloud.png" onclick="window.open('http://www.soundcloud.com/brandominguez','_blank');" />
					<img src="images/socmediaicons/linkedin.png" onclick="window.open('http://www.linkedin.com/in/Brandominguez','_blank');" />
				</div>
			</div>
		</div>
		<img id="customBackground" style="display:block;position:fixed;top:0px;left:0px;right:0px;z-index:-1;" src="images/layout/background.jpg">
		<script type="text/javascript">
			//Execute all functions
			//$(window).on("resize", function(){setTimeout(function(){location.reload();}, 300);});

			function adaptInit()
			{

				//Navbar adapt
					clearSpacing("#navlogo");
					$("#mobileMenu").css("font-size", "18px");
					$("#navlogo").width(getInnerWidth("#navlogo"));

					clearSpacing("#navlinks");
					navlinksWidthCopy = getInnerWidth("#navlinks"); 
					$("#navlinks").width(navlinksWidthCopy);
					leftrightAdapt("#navlogo", "#navlinks", 30, function()
					{
						//The +10 is in case a scroll bar appears
						if( (($("#navlinks").css("float") == "none") && (navlinksWidthCopy+10 > $("#navbar").width())) )
						{			
							$("#mobileMenu").css("display", "inline-block");
							$("#navlogo").width(getInnerWidth("#navlogo") + $("#mobileMenu").outerWidth() + 10);
							$("#navlinks").css("display", "none");

							$("#navlinks div").css("display", "block");
							$("#navlinks div").css("text-align", "center");
							$("#navlinks").width( "65%" );

						}
						else
						{
							$("#mobileMenu").css("display", "none");
							$("#navlogo").width(getInnerWidth("#navlogo"));
							$("#navlinks").css("display", "block");

							$("#navlinks div").css("display", "inline-block");
							$("#navlinks div").css("text-align", "left");
							$("#navlinks").width(navlinksWidthCopy);
						}
					});

					verticalAlign("#navlinks", function()
					{
						//This allows it to look more vertically centered
						if( $("#navlinks").css("float") != "none" )
							push = push + 10;
						else
							push = 20;
					});

					//Code that executes when user hovers over links.
					navlinksHover();
					function navlinksHover()
					{
					 	var inputElement = "#navlinks div";
						$(inputElement).each(function()
						{
							//This will fancy up the link that has the name of the page
							var inputElementContents = $(this).text();
							if( inputElementContents == currentPage )
							{
								$(this).css("text-shadow", "0px 0px 15px #CCFF00, 0px 0px 15px #CCFF00, 0px 0px 15px #CCFF00");
								$(this).css("border-top-color", "#CCFF00");
								$(this).css("border-top-width", "4px");
								$(this).css("padding-top", "8px");
							}
							//This will fancy up all other links upon hovering
							else
							{
								$(this).hover(
									function() //change it.
									{
										$(this).css("text-shadow", "0px 0px 15px #CCFF00,0px 0px 15px #CCFF00, 0px 0px 15px #CCFF00");
										$(this).css("border-top-color", "#CCFF00");
										$(this).css("border-top-width", "4px");
										$(this).css("padding-top", "8px");
									},
									function() //change it back.
									{
										$(this).css("text-shadow", "none");
										$(this).css("border-top-color", "white");
										$(this).css("border-top-width", "1px");
										$(this).css("padding-top", "11px");
									}
								);
							}
						});
					}	

				//Footer adapt
					copyrightWidthCopy = getInnerWidth("#copyright");
					$("#copyright").width(copyrightWidthCopy);
					clearSpacing("#socmedia");
					$("#socmedia").width(getInnerWidth("#socmedia"));
					leftrightAdapt("#copyright", "#socmedia", 60, function()
					{
						if( (($("#copyright").css("float") == "none") && (copyrightWidthCopy > $("#footer").width())) )
						{			
							$("#copyright").css("font-size", "10px");
							$("#copyright").width( $("#footer").width()-60 );
						}
						else
						{
							$("#copyright").css("font-size", "12px");
							$("#copyright").width(copyrightWidthCopy);
						}
					});
			}

			function dynamicBackground()
			{
				//Adaptive code for a background image
				$("#customBackground").height($(window).height());

				screenWidth = $(window).width();
				bgImgWidth = $("#customBackground").width();
			    adaptiveMargin = (screenWidth - bgImgWidth)/2;

			   	$("#customBackground").css("margin-left", adaptiveMargin);
			    
				if( screenWidth > bgImgWidth )
				{
					$("#customBackground").css("margin-left", 0);
					$("#customBackground").height("auto");
					$("#customBackground").width(screenWidth);
				}
			}
		</script>

		<script type="text/javascript">
			$(window).load(function()
			{
				//Start resizing and adapting
				adaptInit();

				dynamicBackground();

				//By default the page is invisible, and this fades it in when ready.
				setTimeout(function()
				{
					$("#content").css("visibility", "visible");
				    $("#content").fadeTo(0, 0.0);
				    $("#content").fadeTo(700, 1);
				   
     				$("#content").load(currentPage + ".html");
				    readout();
				}, 50);	
			});
		</script>
			
<!-- 	<div id="readout" style="border:1px solid gray;background: rgba(0, 0, 0, .2);padding:5px;line-height: 20px;width:180px;font-size: 12px;color:black"></div> 
		<script type="text/javascript">
			function readout()
			{	
				setTimeout(function()
				{
					$("#readout").html(
						"html width: " + $("html").innerWidth() +
						"<br />window Width: " + $(window).width() + 
						"<br />document Width: " + $(document).width() + 
						"<br />bgImg width: " + bgImgWidth + 
						"<br />margin-left: " + adaptiveMargin + 
						"<br />=================" +
						"<br />navbar width: " + $("#navbar").width() +
						"<br />navlogo width: " + $("#navlogo").width() +
						"<br />navlinks width: " + $("#navlinks").width() +
						"<br />navbar height: " + $("#navbar").height() +
						"<br />navlinks height: " + $("#navlinks").height() +
						"<br />push: " + push +
						"<br />navlinks display: " + $("#navlinks div").css("display")
					);
				}, 300);
			}
		</script> -->
	</body>
</html>