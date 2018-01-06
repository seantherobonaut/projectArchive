<?php
	require 'uuwat/Base/htmlPrinter.php';
	require 'core/userDBconn.php';
	
	Headers::$title = 'SRS';
	Headers::$author = 'Sean Leapley';
	Headers::newjs('uuwat/Base/jquery3.2.1.min.js');
	Headers::newcss('uuwat/Base/core.css');
	Headers::newjs('uuwat/Base/core.js');

	Headers::newcss('SRS/css/layout.css');
	Headers::newcss('SRS/css/navbar.css');
	Headers::newjs('SRS/js/adaptive.js');
	
	ob_start(); 
		require 'pages/'.$_GET['page'].'.php';						
	$pageOutput = ob_get_clean();
	$headersOutput = Headers::getHeaders();
	require 'core/DOM.php';
?>
