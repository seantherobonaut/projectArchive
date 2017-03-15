var checkflag = "false";
function check(field)
{
    if (checkflag == "false")
    {
        for (i = 0; i < field.length; i++)
            field[i].checked = true;
        
        checkflag = "true";
        return "Uncheck All";
    }
    else
    {
        for (i = 0; i < field.length; i++)
            field[i].checked = false;

        checkflag = "false";
        return "Check All";
    }
}

//Google Analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-33759917-1']);
_gaq.push(['_trackPageview']);

(function()
{
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();

$(document).ready(function()
{
    mojoInit();
});

function mojoInit()
{
    MojoZoom.makeZoomable(document.getElementById('im1'), 'http://cdn.sanmar.com/imglib/mresjpg/2013/f6/ST690_black_model_front.jpg', document.getElementById('im1_zoom'), '', '', false);
    $('#im1_zoom').height($('#content').height());
}