<?php

	// site owner
	$site_name = 'Krystel Leal';
	$sender_domain = 'contacto@krysteleal.com';
	$to = 'hello@krysteleal.com';
	
	
	// contact form fields
	$name = trim( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$subject = trim( $_POST['subject'] );
	$message = trim( $_POST['message'] );
	
	
	// check for error
	$error = false;
	
	if ( $name === "" ) { $error = true; }
	
	if ( $email === "" ) { $error = true; }
	
	if ( $subject === "" ) { $error = true; }
	
	if ( $message === "" ) { $error = true; }
	
	
	// if no error, then send mail
	if ( $error == false )
	{
		$body = "Nome: $name \n\nEmail: $email \n\Mensagem: $message";
		
		$headers = "De: " . $site_name . ' <' . $sender_domain . '> ' . "\r\n";
		$headers .= "Responder a: " . $name . ' <' . $email . '> ' . "\r\n";
		
		$mail_result = mail( $to, $subject, $body, $headers );
		
		if ( $mail_result == true )
		{
			echo 'success';
		}
		else
		{
			echo 'unsuccess';
		}
		// end if
	}
	else
	{
		echo 'error';
	}
	// end if

?>