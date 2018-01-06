<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="SRS/images/layout/icon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Scary Room Studios - UsVsU">
		<meta name="keywords" content="scaryroomstudios,brandondominquez,rap,d-rock,usvsu">
		<?php echo (!empty($headersOutput) ? $headersOutput : null);?>
		<script type="text/javascript">
			//TODO add functionality to only allow certain pages to go through and not ?;alkjdf;lasjkdf
			currentPage = "<?php echo $_GET["page"];?>";
		</script>
	</head>
	<body>
		<link rel='stylesheet' type='text/css' href='SRS/modules/dynBackground/styles.css'>
		<script type='text/javascript' src='SRS/modules/dynBackground/client.js'></script>
		<div id="dynBg"><div class="imgFull" style="display:none;">SRS/images/layout/background.jpg,1920,1200</div></div>
		<script type="text/javascript">
			dynBgInit();
		</script>
		<div id="wrapper">
			<div class="partition" id="header" style="padding-top:5px;padding-bottom:5px">
				<div id="navbar">
					<div id="navlogo" style="white-space:nowrap">
						<!-- This button is default invisible and only becomes visible when navlinks divs are displayed as block elements -->
						<img src="SRS/images/layout/logo.png" style="display:inline-block;height:60px;vertical-align:middle;cursor:pointer" onclick="window.open('/Home','_self');" />
						<div id="mobileMenu" style="color:white;display:none;vertical-align:middle;cursor:pointer;font-size:18px;font-family:sans-serif;padding:0px 5px;margin-left:10px" onclick="$('#navlinks').slideToggle(300);">
							Menu
							<img src="SRS/images/layout/mobile_menu_icon.png" style="vertical-align:middle;border:1px solid white;border-radius:6px;display:inline-block;width:20px;padding:5px" />
						</div>
					</div>
					<div id="navlinks">
						<div onclick="window.open('/home','_self');">Home</div>
						<div onclick="window.open('/SoundDesigns','_self');">Sound Designs</div>
						<div onclick="window.open('/Contact','_self');">Contact</div>
					</div>
				</div>
			</div>

			<div class="partition" style="margin-bottom:0px">
				<div id="main">
					<div id="content">
						<?php echo $pageOutput;?>		
					</div>
				</div>
			</div>

			<div class="partition" style="margin-top:0px;padding-top:7px;">
				<div id="footer">
					<div id="copyright">
						<!-- Some crazy white-space stuff to make sure the lines only break before "All rights reserved." -->
						<div style="white-space:nowrap;display:inline-block;font-size: 12px">
							Copyright &copy; 2014-<?php echo date('Y');?> Scary Room Studios. 
						</div>
						<div style="white-space:nowrap;display:inline-block;font-size:12px">
							All rights reserved.
						</div>
					</div>
					<div id="socmedia">
						<img src="SRS/images/socmediaicons/facebook_thumbnail.png" onclick="window.open('http://www.facebook.com/ScaryRoomStudios','_blank');" />
						<img src="SRS/images/socmediaicons/soundbetter_thumbnail.png" onclick="window.open('https://soundbetter.com/profiles/18055-brandon-dominguez-productions','_blank');" />
						<img src="SRS/images/socmediaicons/vimeo_thumbnail.png" onclick="window.open('http://www.vimeo.com/Brandominguez','_blank');" />
						<img src="SRS/images/socmediaicons/soundcloud_thumbnail.png" onclick="window.open('http://www.soundcloud.com/brandominguez','_blank');" />
						<img src="SRS/images/socmediaicons/linkedin_thumbnail.png" onclick="window.open('http://www.linkedin.com/in/Brandominguez','_blank');" />
					</div>
				</div>
			</div>
			
			<script type="text/javascript" src="SRS/js/base.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){adaptInit();});
			</script>
			<?php //require 'SRS/client_diag.php';?>
		</div>
	</body>
</html>
