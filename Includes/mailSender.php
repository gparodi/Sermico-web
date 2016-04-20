<?php
require('PHPMailer-master/class.phpmailer.php');
require('PHPMailer-master/class.smtp.php');

	$fromName=$_POST['fromName'];
	$asunto=$_POST['asunto'];
	$body=$_POST['mensaje'];
	
	$mail = new PHPMailer();
	
	
	
	$mail->IsSMTP(); 
	
	// la dirección del servidor, p. ej.: smtp.servidor.com
	$mail->Host = "smtp.sermico.com.ar";
	
	// dirección remitente, p. ej.: no-responder@miempresa.com
	$mail->From = "info@sermico.com.ar";
	
	// nombre remitente, p. ej.: "Servicio de envío automático"
	$mail->FromName = $fromName;
	
	// asunto y cuerpo alternativo del mensaje
	$mail->Subject = $asunto;
	$mail->AltBody = "Si no puede ver este mensaje por favor comuniquese con el administrador: g.parodi@sermico.com.ar"; 
	
	// si el cuerpo del mensaje es HTML
	
	
	$mail->MsgHTML($body);
	
		
	$mail->AddAddress("info@sermico.com.ar");		
	
	
	
	// si el SMTP necesita autenticación
	$mail->SMTPAuth = true;
	
	// credenciales usuario
	$mail->Username = "info@sermico.com.ar";
	$mail->Password = "sermico150"; 
	
	if(!$mail->Send()) {
	echo "Error enviando:" . $mail->ErrorInfo;
	} else {
	echo "¡¡Enviado!!";
	}


?>