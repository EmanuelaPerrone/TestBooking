<?php

include_once("dbConnect.php");
 
	global $conn;
  	
	$emailMedico = $_GET["emailMedico"];		
			
    $query2 = "SELECT codiceMedico FROM amministrazione WHERE emailMedico = '{$emailMedico}'";
    
	$result = mysqli_query($conn, $query2);
	
    if (mysqli_num_rows($result) > 0) {
	  while($rowData = mysqli_fetch_array($result)){
  	   $codiceMedico = $rowData["codiceMedico"];
	  }
    }
		 
	if( $conn->query($query2)){
	  
		echo "email inviata con successo.";	  
		//email
		$nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $emailMedico;

		$mail_oggetto = "Codice medico";
		$mail_corpo = "La tua richiesta è stata approvata. I dati sono stati verificati e ora puoi prenotare come medico.	
	
Il tuo codice per effettuare prenotazioni è: $codiceMedico. 

!!! NON PERDERE QUESTA INFORMAZIONE !!!

Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
	} else {
    	echo $conn->error;
    }

    $query3 = "DELETE FROM amministrazione WHERE emailMedico = '{$emailMedico}'";
    $result232313 = mysqli_query($conn, $query3);
	   
		 
?>
