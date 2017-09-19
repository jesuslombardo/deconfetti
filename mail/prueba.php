<?php
	// Check for empty fields

require("class.phpmailer.php");
require("class.smtp.php");



	$name = "pepe";
	$email = "lolo@lolo.com";
	$phone = "2123123";
	$message = "aseaefaefokafokafokaf";
	$emailDestino = "jesuslombardo@gmail.com";

	$smtpHost = "c0880187.ferozo.com";
	$smtpUsuario = "info@deconfetti.com";
	$smtpClave = "Josefina0508";

	// Create the email and send the message
	$to = 'jesuslombardo@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.


	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Port = 587; 
	$mail->IsHTML(true); 
	$mail->CharSet = "utf-8";

	

	// VALORES A MODIFICAR //
	$mail->Host = $smtpHost; 
	$mail->Username = $smtpUsuario; 
	$mail->Password = $smtpClave;

	$mail->From = $email;

	$mail->FromName = $name;
	$mail->AddAddress($emailDestino); // 


	$mail->Subject = "deconfetti contacto de: $name"; // Este es el titulo del email.

	$mensaje = "Recibiste un mensaje de tu web.\n\n"."Acá están los detalles:\n\nNombre: $name\n\nEmail: $email\n\nTeléfono: $phone\n\nMensaje:\n$message";

	$mensajeHtml = nl2br($mensaje);
	$mail->Body = "{$mensajeHtml}";
	$mail->AltBody = "{$mensajeHtml} \n\n Formulario de ejemplo By DonWeb"; //


	$estadoEnvio = $mail->Send(); 
	
	/*if($estadoEnvio){
    	var_dump($estadoEnvio);
    	exit;
	}*/
	return $estadoEnvio;
	exit;


?>