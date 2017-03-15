<!DOCTYPE html>
<html>
	<head>
		<title>DJMC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Shadows+Into+Light" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

		<style type="text/css">
			html, body
			{
				margin:0px;
				padding:0px;
				font-size: 0px;
			}

			html {overflow-y: scroll;}
			body {padding:30px;}

			.s1{font-size: 32px;}
			.s2{font-size: 24px;}
			.s3{font-size: 18px;}
			.s4{font-size: 16px;}r
			.s5{font-size: 12px;}
			.s6{font-size: 10px;}

			.box
			{
				display: block;
				box-sizing: border-box;
			}

			.inlineBox
			{
				box-sizing: border-box;
				display: inline-block;
			}

			.wrap
			{
				width:100%;
				max-width: 1000px;
				margin:auto;
				padding:10px;
			}

			.text 
			{
				font-family: monospace;
			}

			/*Non standard styles*/

			.main
			{
				border:1px dashed lightgray;
			}

/*			.textlogo
			{
				font-family: "Architects Daughter";
				font-size: 120px;
			}

			.textlogosub
			{
				font-size:35px;
				font-family: "Shadows Into Light";
				text-shadow:0px 0px 15px gold,0px 0px 15px gold;
				font-style: italic;
			}*/

			.inlineCell
			{
				width:50%;
				border:3px solid blue;
				height:50px;
				position: relative;
				vertical-align: top;
			}

			.inlineCell > div
			{
				border:1px solid black;
				width:100px;
				height:20px;
				position: absolute;
				top:50%;
				margin-top:-10px;
			}

			.left{left:0px;}

			/*Next task: try using  .something:nth-child(3) .subchild; {styles}....then try to make it to apply to any  */

			.inlineCell:nth-child(1) > div {left:0px;}
			.inlineCell:nth-child(2) > div {right:0px;}

			.mytestImg
			{
				display:block;
				position:fixed;
				top:0px;
				right:0px;
				bottom:0px;
				left:0px;
				z-index:-1;
			}
		</style>
	</head>
	<body>
		<div class="wrap box main">
			<div class="box">
				<div class="inlineBox inlineCell">
					<div class="text s4">
						Left
					</div>
				</div>
				<div class="inlineBox inlineCell">
					<div class="text s4">
						Right
					</div>
				</div>
				<div class="text s3" id="imgResult"></div>


					<?php $bgImgArray = getimagesize("lion3.jpg");?>
					<script type="text/javascript">
						myImgWidth = <?php echo $bgImgArray[0];?>;
						myImgHeight = <?php echo $bgImgArray[1];?>;
					</script>

					<img id="mytestImg" src="lion2.jpg">	


				<script type="text/javascript">

					

					function dynamicBackground()
					{
	
							$(".bgMain img").each(function()
							{
								//Calculate ratios
								whRatio = myImgWidth / myImgHeight;
								hwRatio = myImgHeight / myImgWidth;

								//Set dimensions relative to window height
								$(this).height($(window).height());
								$(this).width((whRatio * $(window).height()));

								screenWidth = $(window).width();
								bgImgWidth = $(this).width();
							    adaptiveMargin = (screenWidth - bgImgWidth)/2;

							   	$(this).css("margin-left", adaptiveMargin);
							    
								if( screenWidth > bgImgWidth )
								{
									$(this).css("margin-left", 0);
									$(this).height("auto");
									$(this).width(screenWidth);
								}
							});
						}
						else
						{
							$(".bgMain").css("background-image", "url(" + myImgPath + ")");
							$(".bgMain").css("background-repeat", "repeat");
						}
					}
				</script>
			</div>
		</div>
	</body>
</html>