<?php
	// process_contact.php

	// Retrieve user input from form
	$name = $_POST["name"];
	$email = $_POST["email"];
	$company= $_POST["company"];

	$subject = $_POST["subject"];
	$message = $_POST["message"];
	

	

	// Compose message
	$msg="
	<html>
	<head>
		<title>SonRiza Graphic Design Data</title>
	</head>
	<body>
		<b>Name: </b>" . $name. "<br />
		<b>Email: </b>" . $email. "<br />
		<b>Company: </b>" . $company. "<br />
		<br />
		<b>Subject: </b>" . $subject. "<br />
		<b>Message: </b>" . $message. "<br />
		

	</body>
	</html>
	";

	$to = "tlee1271@yahoo.com";			// Set destination address here
	$subject = "SonRiza Graphic Design Message";
	$cc_address="";
	$from_email = "SonRiza_Message";
	
	$headers  = "MIME-Version: 1.0 \r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "To: " . $to . "\r\n";
	$headers .= "From: " . $from_email . "\r\n";
	$headers .= "Cc: " . $cc_address . "\r\n";
	$headers .= "Bcc: " . "\r\n";

	// print "MESSAGE: <br> $msg";

	if ( mail($to, $subject, $msg, $headers) )
	{
		Header("Location: mail_sent.html");
	}
	else
	{
		die("Error sending message");
	}

?>