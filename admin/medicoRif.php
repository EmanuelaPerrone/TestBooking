<?php

include_once("dbConnect.php");
 
	global $conn;
  	
	$emailMedico = $_GET["emailMedico"];		

		echo "email inviata con successo.";	  
		//email
		$nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $emailMedico;

		$mail_oggetto = "Codice medico";
		$mail_corpo = "La tua richiesta è stata rifiutata. I dati sono stati verificati e non corrispondono ad una figura professionale idonea.

Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
	
        $query3 = "DELETE FROM amministrazione WHERE emailMedico = '{$emailMedico}'";
        $result232313 = mysqli_query($conn, $query3);

		$query4 = "DELETE FROM medico WHERE email = '{$emailMedico}'";
		$result2334231313 = mysqli_query($conn, $query4);
		 
?>
