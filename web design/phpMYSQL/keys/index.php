<!DOCTYPE html>
<html>
    <head>
        <title>Get/Send data without refresh from php/jquery/mysql</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <style type="text/css">
            #inputText
            {
                box-sizing: border-box;
                padding:10px;
                height:37px;
                width:200px;
                max-height: 37px;
                max-width: 200px;
            }

            #result
            {
                width:200px;
            }
        </style>
    </head>
    <body>
        <div>
            Please enter a value.
        </div>
        <div id="result"></div>
        <textarea id="inputText" rows="1" maxlength="20"></textarea>
        <!-- <button id="subButton">click</button> -->
        <script type="text/javascript">
/*            $("#subButton").on("click", function()
            {
                var name = $("#inputText").val();
                //alert(uInput);
                $.post('input.php', {name: name}, function(data)
                {
                    $("#result").text(data);
                });
            });*/

            $("#inputText").keypress(function(event)
            {
                var keyCode = (event.keyCode ? event.keyCode : event.which);
                if(event.keyCode == 13)
                {
                    var textStuff = $("#inputText").val();
                    $("#inputText").hide();
                    $("#result").text(textStuff);
                    $("#inputText").show();
                }
            });
/*            $("button#subButton").click(function()
            {
                $("#inputText").val('');
            });*/
        </script>
    </body>
</html>