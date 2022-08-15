<?php

include_once("dbConnect.php");
 
	global $conn;
  	
	$emailDatore = $_GET["emailDatore"];		
			
    $query2 = "SELECT codiceDatore FROM amministrazione WHERE emailDatore = '{$emailDatore}'";
    
	$result = mysqli_query($conn, $query2);
	
    if (mysqli_num_rows($result) > 0) {
	  while($rowData = mysqli_fetch_array($result)){
  	   $codiceDatore = $rowData["codiceDatore"];
	  }
    }
		 
	if( $conn->query($query2)){
	  
		echo "email inviata con successo.";	  
		//email
		$nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $emailDatore;

		$mail_oggetto = "Codice datore di lavoro";
		$mail_corpo = "La tua richiesta è stata approvata. I dati sono stati verificati e ora puoi prenotare come datore di lavoro.	
	
Il tuo codice per effettuare prenotazioni è: $codiceDatore. 

!!! NON PERDERE QUESTA INFORMAZIONE !!!

Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
	} else {
    	echo $conn->error;
    }

    $query3 = "DELETE FROM amministrazione WHERE emailDatore = '{$emailDatore}'";
    $result232313 = mysqli_query($conn, $query3);
	   
		 
?>
