<!-- <!DOCTYPE html>
<html>
	<head>

		<title>Game test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<style type="text/css">
			html, body
			{
				margin:0px;
				padding:0px;
			}

			body
			{
				padding:20px;
			}

			html {overflow-y: scroll;}

			.text
			{
				font-family: Verdana;
				font-size:16px;
				font-weight: normal;
			}

			.box
			{
				box-sizing: border-box;
				display: block;
			}

			#wrapper
			{
				width:800px;
				height:800px;
				border:1px solid black;
				margin:auto;
				position: relative;
			}

			#bot
			{
				background-color: #aaa;
				border:8px solid blue;
				width:30px;
				height:30px;
				box-sizing: border-box;
				position: absolute;
			}

			#xaxis
			{
				border:1px solid black;
				box-sizing: border-box;
				width:400px;
				height:100%;
				position: absolute;
			}

			#yaxis
			{
				border:1px solid black;
				box-sizing: border-box;
				width:100%;
				height:400px;
				position: absolute;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="bot"></div>
			<div id="yaxis"></div>
			<div id="xaxis"></div>
		</div>
		<div class="box text"></div>
	</body>
	<script type="text/javascript">

	    var x = 0;
	    var y = 0;
	    var value = 1;
	    $("body").keydown(function(key)
	    {
	    	key = key.keyCode;
	    	if(key==37)
	    	{
	    		x = x - value;
		    	$("#bot").css("left", x);
	    	}

	    	if(key==39)
	    	{
	    		x = x + value;
		    	$("#bot").css("left", x);
	    	}

	    	if(key==38)
	    	{
	    		y = y - value;
		    	$("#bot").css("top", y);
	    	}

	    	if(key==40)
	    	{
	    		y= y + value;
		    	$("#bot").css("top", y);
	    	}
	    	
	    });
	    //setInterval(myfunky, 20);

	</script>
</html> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<title>Simple 2D JavaScript engine - RobseRob.Dk</title> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
// Made by RobseRob.dk
// Please give credit.
// Vars which contains key state
var movLeft = 0;
var movRight = 0;
var movUp = 0;
var movDown = 0;

var score = 0;
$(function() {
    // Keydown listener
    $("body").keydown(function(e) {
        ek = e.keyCode;
        if (ek==37) movLeft=1;
        if (ek==39) movRight=1;
        if (ek==38) movUp=1;
        if (ek==40) movDown=1;
    });
    // Keyuo listener
    $("body").keyup(function(e) {
        ek = e.keyCode;
        if (ek==37) movLeft=0;
        if (ek==39) movRight=0;
        if (ek==38) movUp=0;
        if (ek==40) movDown=0;
    });
    setup(); // Do setup
});

// Setups the game. Adds a new div "tempMov" which is used to calculate whenever the player is allowed to move
function setup() {
    var x = $(".player").css("left");
    var y = $(".player").css("top");
    var width = $(".player").width();
    var height = $(".player").height();
    $(".game").prepend("<div class='tempMov' style='position: absolute; left:"+x+"; top:"+y+"; width:"+width+"px; height:"+height+"px;'></div>");
    setInterval("movTick()", 1); // Setup interval. Delay controlls tickrate.
}

// Checks if a is inside b
function insideGameArea(a, b) {
    var aPos = a.position();
    
    var aLeft = aPos.left;
    var aRight = aPos.left + a.width();
    var aTop = aPos.top;
    var aBottom = aPos.top + a.height();
    
    var bLeft = 0
    var bRight = b.width();
    var bTop = 0
    var bBottom = b.height();
    return !(aLeft < 0 || aTop < 0 || aRight > bRight || aBottom > bBottom);
}

// Checks if div a overlaps div b
function divOverlap(a, b) {
    var aPos = a.position();
    var bPos = b.position();
    
    var aLeft = aPos.left;
    var aRight = aPos.left + a.width();
    var aTop = aPos.top;
    var aBottom = aPos.top + a.height();
    
    var bLeft = bPos.left;
    var bRight = bPos.left + b.width();
    var bTop = bPos.top;
    var bBottom = bPos.top + b.height();
    
    return !( bLeft > aRight || bRight < aLeft || bTop > aBottom || bBottom < aTop);
}

// Move one pixel for each direction and check if move is valid.
function movTick() {
    var moved = 0;
    if (movUp) { $(".tempMov").css({"top": "-=1"}); moved=1;}
    if (movDown) { $(".tempMov").css({"top": "+=1"}); moved=1;}
    if (movLeft) { $(".tempMov").css({"left": "-=1"}); moved=1;}
    if (movRight) { $(".tempMov").css({"left": "+=1"}); moved=1;}
    if (!moved) return false;
    var moveAllowed = 1;
    
    if (!insideGameArea($(".tempMov"), $(".game"))) moveAllowed = 0; // Checks if move is inside the gamearea.
    
    $(".solid").each(function(index) {
        if (divOverlap($(".tempMov"), $(".solid:eq("+index+")"))) moveAllowed=0; // Checks if there is any overlap on a solid object.
    });
    
    $(".coin").each(function(index) {
        if (divOverlap($(".tempMov"), $(".coin:eq("+index+")"))) { score+=50; $(".coin:eq("+index+")").remove(); } // Checks if there is any overlap on a coin.
    });
        
    if (moveAllowed) {
        $(".player").css({"left": $(".tempMov").css("left"), "top": $(".tempMov").css("top")}); // Apply the move to the player
    } else {
        $(".tempMov").css({"left": $(".player").css("left"), "top": $(".player").css("top")}); // Reset the tempMov to last location
    }
}
</script>
<style>
.game {
    width:500px;
    height:500px;
    position:relative; 
    border:2px solid #000;
}
.player {
    width:25px; 
    height:25px; 
    background-color:#000000; 
    position:absolute;     
}
.solid {
    position:absolute; 
}
.coin {
    width:10px;
    height:10px;
    position:absolute; 
    background:rgba(255,204,0,1);
}
</style>
<body>
<div class='game'>
    <div class='player' style='left:10px; top:10px;'></div>
</div>
</body>


<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
}
</style>
</head>
<body onload="startGame()">
<script>

var myGamePiece;
var myObstacles = [];
var myScore;

function startGame() {
    myGamePiece = new component(30, 30, "red", 10, 120);
    myGamePiece.gravity = 0.05;
    myScore = new component("30px", "Consolas", "black", 280, 40, "text");
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
        },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y, type) {
    this.type = type;
    this.score = 0;
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;
    this.gravity = 0;
    this.gravitySpeed = 0;
    this.update = function() {
        ctx = myGameArea.context;
        if (this.type == "text") {
            ctx.font = this.width + " " + this.height;
            ctx.fillStyle = color;
            ctx.fillText(this.text, this.x, this.y);
        } else {
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    }
    this.newPos = function() {
        this.gravitySpeed += this.gravity;
        this.x += this.speedX;
        this.y += this.speedY + this.gravitySpeed;
        this.hitBottom();
    }
    this.hitBottom = function() {
        var rockbottom = myGameArea.canvas.height - this.height;
        if (this.y > rockbottom) {
            this.y = rockbottom;
            this.gravitySpeed = 0;
        }
    }
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
            crash = false;
        }
        return crash;
    }
}

function updateGameArea() {
    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
    for (i = 0; i < myObstacles.length; i += 1) {
        if (myGamePiece.crashWith(myObstacles[i])) {
            return;
        } 
    }
    myGameArea.clear();
    myGameArea.frameNo += 1;
    if (myGameArea.frameNo == 1 || everyinterval(150)) {
        x = myGameArea.canvas.width;
        minHeight = 20;
        maxHeight = 200;
        height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
        minGap = 50;
        maxGap = 200;
        gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);
        myObstacles.push(new component(10, height, "green", x, 0));
        myObstacles.push(new component(10, x - height - gap, "green", x, height + gap));
    }
    for (i = 0; i < myObstacles.length; i += 1) {
        myObstacles[i].x += -1;
        myObstacles[i].update();
    }
    myScore.text="SCORE: " + myGameArea.frameNo;
    myScore.update();
    myGamePiece.newPos();
    myGamePiece.update();
}

function everyinterval(n) {
    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
    return false;
}

function accelerate(n) {
    myGamePiece.gravity = n;
}
</script>
<br>
<button onmousedown="accelerate(-0.2)" onmouseup="accelerate(0.05)">ACCELERATE</button>
<p>Use the ACCELERATE button to stay in the air</p>
<p>How long can you stay alive?</p>
</body>
</html>
 -->