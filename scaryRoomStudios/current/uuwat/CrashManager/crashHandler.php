<?php
	//TODO
	/*
		Redesign this to only rediect to 'Something wrong page...'
		Do not immediately redirect back to the home
			have option to redirect to home, or save the url of the page that crashed at and return there
			have a login option that turns on debugging than then try the error again
	*/

	function error_handler($errorNo, $message, $file, $line)
	{
		$crashMessage = new ErrorMessage($errorNo, $message, $file, $line, new TimeStamp); //same below this line

		$logger = new SysLogger;
		$logger->pushLog($crashMessage->getData(new CrashLogFormat));

		$_SESSION['crashData'] = $crashMessage->getAllData();
		header('Location: /');
		exit();
	}
	set_error_handler('error_handler', E_ALL);

	function exception_handler($exception)
	{
		$crashMessage = new ExceptionMessage($exception, new TimeStamp); //same below this line

		$logger = new SysLogger;
		$logger->pushLog($crashMessage->getData(new CrashLogFormat));

		$_SESSION['crashData'] = $crashMessage->getAllData();
		header('Location: /');
		exit();
	}
	set_exception_handler('exception_handler'); //This can catch parse errors!...or at least it used to...maybe only under certain conditions?

?>
