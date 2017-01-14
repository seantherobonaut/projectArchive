
//First run
executeFuncs();
function executeFuncs()
{
	containerResize();
	leftrightAdapt("#navlogo", "#navlinks", 30, function(){}, navbarAdapt);
	leftrightAdapt(".tom", ".jerry", 30);
	leftrightAdapt(".bob", ".sussan", 30);
}

/*var ticks, timer;
$(window).on("load resize", function(){startTimer();});

function startTimer()
{
	ticks = 0;
	countTicks(); //The initial execution for no double delay
	clearInterval(timer);
	timer = setInterval(countTicks, 50);
}

//There are 
function countTicks()
{
	if(ticks >= 5)
	{
		clearInterval(timer);
		ticks = 0;	

			executeFuncs();
		
	}
	else
	{
		ticks++;
	}
}
*/