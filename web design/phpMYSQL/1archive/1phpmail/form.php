<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Php mail test</title>	
		<link rel="shortcut icon" href="http://www.mouserunner.com/images/WindowsIconPreview_128x128.png" />
	</head>
	<body>
		<div id="container">
			<!-- BEGIN MAIN CONTENT HERE  -->
			<h1>Confirmation of message sent...</h1>	
			<?
			// Edit $subject and $mailMessage within quotes to change email
			$subject="Contact Form Completed";
			$name=$_POST['name'];
			$phone=$_POST['phone'];
			$company=$_POST['company'];
			$email=$_POST['email'];
			$comments=$_POST['comments'];
				
			$mailMessage.=
			"
				Name: <b>$name</b>
				<br />
				Phone: <b>$phone</b>
				<br />
				Company: <b>$company</b>
				<br />
				E-Mail: <b>$email</b>
				<br />
				Comments/Questions: <b>$comments</b>
				<br />
			";
				
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$headers .= "From: $name <$email>\r\n"; 
			$headers .= "Reply-To: $name <$email>\r\n";
			$headers .= "X-Priority: 3 (Normal)\r\n"; 
			$headers .= "X-MSMail-Priority: Normal\r\n"; 
			$headers .= "X-Mailer: AWD\r\n";

			$main_email="seantherobonaut@gmail.com";
				
			if (!mail($main_email, $subject, $mailMessage, $headers))
				{	
				print "<br><br><b>Your email was [NOT] sent successfully.<br>Please click on back and try again.</b><br>";
				} 
			else 
				{
				print "<br><br><b>Your email was sent successfully!!!<br>Thank you for your submission.</b><br>";
				}
			?>
		</div>
	</body>
</html>
