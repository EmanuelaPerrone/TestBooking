<?php

include_once("dbConnect.php");
 
	global $conn;
  	
	$email = $_GET["email"];		
			
			
		echo "inviati con successo.";	  
		//email
		$nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Richiesta dati";
		$mail_corpo = "Hai richiesto i dati.
		
Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
    $query1 = "DELETE FROM amministrazione WHERE email = '{$email}'";
    $result = $conn->query($query1);
	   
		 
?>
