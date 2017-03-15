<style type="text/css">
    .compatHeading, .compatSubheading
    {
        font-family: Verdana;
        color:gray;
    }

    #compatToggle{display: none;}

    .compatConditions
    {
        text-align: center;
        padding-top:50px;
        background-color: white;
        position: absolute;
        top:0px;right:0px;bottom:0px;left:0px;
    }

    .compatBox
    {
        border:1px solid lightgray;
        padding:15px;
        text-align: left;
        display: inline-block;
    }

    .compatHeading{font-size: 35px;font-style: italic;padding-bottom: 10px;}

    .compatSubheading{font-size: 20px;}
</style>

<!--[if lte IE 9 ]><style type="text/css">#compatJscript{display: none;}#compatToggle{display: block;}</style><![endif]-->
<noscript><style type="text/css">#compatBrowser{display: none;}#compatToggle{display: block;}</style></noscript>

<div class="compatConditions">
    <div class="compatBox">
        <div class="compatHeading">
            There appears to be nothing wrong with compatibility.<br>
        </div>
        <div class="compatSubheading">
            Please return to the homepage <a href="/" style="color:blue">HERE</a>.
        </div>
    </div>
</div>

<div id="compatToggle">
    <div class="compatConditions">
        <div class="compatBox">
            <div class="compatHeading">
                Apologies, but you cannot view this webpage.<br>
            </div>
            <div class="compatSubheading">
                <u>Your browser is both outdated and has javascript disabled.<br></u>
                *Please enable javascript and try again.<br>
                *Please either update Internet Explorer beyond version 9, or use another browser and try again.
            </div>
        </div>
    </div>
    <div id="compatJscript" class="compatConditions">
        <div class="compatBox">
            <div class="compatHeading">
                Apologies, but you cannot view this webpage.<br>
            </div>
            <div class="compatSubheading">
                *Please enable javascript and try again.
            </div>
        </div>
    </div>
    <div id="compatBrowser" class="compatConditions">
        <div class="compatBox">
            <div class="compatHeading">
                Apologies, but you cannot view this webpage.<br>
            </div>
            <div class="compatSubheading">
                *Please either update Internet Explorer beyond version 9, or try another browser and try again.
            </div>
        </div>
    </div>
</div>
