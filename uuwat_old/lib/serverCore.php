<?php
    function compatCheck($compatCheck)
    {
        if($compatCheck != "compatError")
            return '<!--[if lte IE 9 ]><meta http-equiv="refresh" content="0;url=/?page=compatError"><![endif]--><noscript><meta http-equiv="refresh" content="0;url=/?page=compatError"></noscript>';
    }


?>
