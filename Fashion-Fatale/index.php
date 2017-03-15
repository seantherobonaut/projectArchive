<?php
    error_reporting(0);
    $title = "Fashion Fatale";
    $output = file_get_contents("includes/zoom&popupTest.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title;?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="en-us">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta http-equiv="PRAGMA" content="NO-CACHE">
        <meta http-equiv="Expires" content="-1">
        <?php include('includes/includes.php');?>
        <script type="text/javascript" src="includes/js/initScripts.js" ></script>
    </head>
    <body>
        <div class="wrapper">
            <?php 
                include('header.php');
                include('navbar.php');
            ?>
            <div class="row-fluid"><?php echo $output;?></div>
        </div>
        <?php
            include('footer.php');
            include('includes/popups.php');
        ?>
    </body>
</html>