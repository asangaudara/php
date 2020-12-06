<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'contact@asangabro.ga';

	$email_subject = 'New Form Submission';

	$email_body = "User name: $name.\n".
				  "User email: $visitor_email.\n".
				  "User message: $message.\n";

	$to = "asangaudara20@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-to: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");

header("Location: https://asangabro.ga");
			exit();
         

?>