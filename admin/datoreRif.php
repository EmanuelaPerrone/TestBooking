<?php

include_once("dbConnect.php");
 
	global $conn;
  	
	$emailDatore = $_GET["emailDatore"];		

		echo "email inviata con successo.";	  
		//email
		$nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $emailDatore;

		$mail_oggetto = "Codice datore di lavoro";
		$mail_corpo = "La tua richiesta è stata rifiutata. I dati sono stati verificati e non corrispondono ad una figura professionale idonea.

Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
	
        $query3 = "DELETE FROM amministrazione WHERE emailDatore = '{$emailDatore}'";
        $result232313 = mysqli_query($conn, $query3);

		$query4 = "DELETE FROM aziende WHERE email = '{$emailDatore}'";
		$result2334231313 = mysqli_query($conn, $query4);
		 
?>
