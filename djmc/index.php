<?php
	$bgImgPath = "images/layout/lion3.jpg";
	$bgImgArray = getimagesize($bgImgPath);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="images/layout/icon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="lib/cssCore.css" />
		<script src="lib/jsCore.js"></script>
		<script src="lib/initCore.js"></script>
		<style type="text/css">
			body
			{
				background-color: gray;
			}
		</style>
		
		<!-- Copy php variables to javascript -->
		<script type="text/javascript">
			myImgPath = "<?php echo $bgImgPath;?>";
			myImgWidth = <?php echo $bgImgArray[0];?>;
			myImgHeight = <?php echo $bgImgArray[1];?>;
			myImgType = "full";
		</script>

	</head>
	<body>
		<div class="bgMain">&nbsp;</div><script type="text/javascript">dynamicBackground();</script>

		<div class="partition">
			<div class="module" id="content">



				<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Shadows+Into+Light" rel="stylesheet">
				<style type="text/css">
					#loadedContent
					{
						text-align:left;
						color:#dd7700;
						color:white;
						font-size:120px;
						opacity: .7;
						
						font-family: 'Architects Daughter';
						
						
						line-height: 90px;
						width:40%;
						
					}

					.tonic
					{
						font-family: 'Shadows Into Light';
						font-style: italic;
						font-size:35px;
						opacity: .8;
						color:white;
						line-height:70px;
						width:40%;

						text-shadow:0px 0px 15px gold,0px 0px 15px gold;

						
					}

					.menu
					{
						position: absolute;
						top:105px;
						right:90px;
						font-family: 'Architects Daughter';
						font-size:20px;
						color:#ccc;
					}

				</style>

				<div id="loadedContent" class="text">
					DJMC
				</div>
				<div class="tonic"> "music to believe in..."</div>

					<div class="text menu" style="float:right">Music | About | Events | Photos | Legal</div>

				<div style="width:320px;position:absolute;bottom:100px;left:20px;">
				<audio id="player" controls="controls">
				  <source id="sourceOgg" src="" type="audio/ogg" />
				  <source id="sourceMp3" src="" type="audio/mp3" />
				  Your browser does not support the audio element.
				</audio>
					<div class="menu" style="font-size:20px;background: rgba(0, 0, 0, .7);">
						Hello world! This is a project for Darryl Yates!
					</div>

					
				</div>

				<script type="text/javascript">

				    
				    var player=document.getElementById('player');
				    var sourceOgg=document.getElementById('player');
				    var sourceMp3=document.getElementById('player');
				    
				    sourceMp3.src='HardToSee2.mp3';
				    
					player.load(); //just start buffering (preload)
					//player.play(); //start playing	

				</script>





			</div>
		</div>
		<script type="text/javascript">pageInit();</script>
	</body>
</html>