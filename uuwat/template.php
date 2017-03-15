<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Sean Leapley">
        <link rel="icon" type="image/png" href="<?php echo $favIcon;?>" />
        <title><?php echo $title?></title>
        <?php echo compatCheck($page);?>

        <!-- Change how includes are pasted in later -->
        <link rel="stylesheet" type="text/css" href="lib/cssCore.css"><script type="text/javascript" src="lib/jsCore.js"></script>
    </head>
    <body>
        <?php loadContent();?>
    </body>
</html>
