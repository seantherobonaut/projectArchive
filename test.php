<!DOCTYPE html>
<html>
  <head>
    <title>Test page</title>
    <link rel="stylesheet" type="text/css" href="/uuwat/Base/styles.css">
    <style type="text/css">
      body
      {
       /* color:#ccc;
        background-color: #151515;*/
      }
      .test
      {
        width: 100px;
        height: 100px;
        background-color: lightblue;
        border:1px solid #88f;
      }

      #testwrap
      {
        border:1px solid black;
        margin:10px auto;
      }

      #testwrap > div.cell
      {
        border: 1px solid red;
        text-align: right;
      }
      #testwrap > div.cell > span.cell
      {
        border:8px solid blue;
      }
    </style>
    <script type="text/javascript">
      function exec()
      {

        var targets = document.querySelectorAll("#testwrap > div.cell > span.cell");
        for(var i=0; i<3; i++)
        {
          var x = targets[i];
          console.log(window.getComputedStyle(x, null).getPropertyValue("width")+ "hah" + i);

          //window.getComputedStyle(ii, null).getPropertyValue("width")
        }
      }
    </script>
  </head>
  <body>
    Hello world!
    <div id="wrapper" class="cell" style="border: 1px solid black;">
      <div class="cell module" style="border: 1px dashed black">
        <div class="cell s8" style="border:1px solid black;width:380px">
          Hello! My name is Sean Leapley and <a class="hyperlink" href="http://www.seanleapley.com">this right here</a> is my website!
          <div class="cell" style="border:1px solid blue">
            <span class="cell test"></span>
            <span class="cell test"></span>
            <span class="cell test"></span>
            <div class="cell" style="border: 10px solid black;width:300px;height:10px"></div>
           <!--  <img src="http://deelay.me/1000/http://examplesite.com/image.gif"> -->
            <img class="image" style="border:10px solid green;width: 300px" src="http://deelay.me/1/http://scaryroomstudios.com/SRS/images/content/usvsu.png">
          </div>
          <form class="dataform" style="border:2px solid red;">
            <div class="cell s9">Hello world!</div>
            <button class="button" type="button">submit</button>
            <input type="text" name="stffs">
            <input type="submit" value="submit">
          </form>
        </div>
      </div>

      <div class="cell module" id="testwrap">
        <div class="cell"><span class="cell s8">Hello</span></div>
        <div class="cell"><span class="cell s8" id="thistest">Hello</span></div>
        <div class="cell"><span class="cell s8">Hello</span></div>
      </div>

    </div>
    <script type="text/javascript">
      exec();
      window.addEventListener("resize", exec);
    </script>
  </body>
</html>