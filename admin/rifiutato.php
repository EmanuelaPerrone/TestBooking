<?php

include_once("dbConnect.php");
 
	global $conn;
  	
	$codice_univoco=$_GET["codice_univoco"];		
			
			
    $query1 = "DELETE FROM laboratori WHERE codice_univoco = '{$codice_univoco}'";
    $query2 = "SELECT pec FROM laboratori WHERE codice_univoco = '{$codice_univoco}'";
    
	$result = mysqli_query($conn, $query2);
	
    if (mysqli_num_rows($result) > 0) {
	  while($rowData = mysqli_fetch_array($result)){
  	   $pec = $rowData["pec"];
	  }
    }
		 
	if( $conn->query($query1)){
	  
		echo "Email inviata con successo.";	  
		//email
		$nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $pec;

		$mail_oggetto = "Conferma convenzionamento laboratorio";
		$mail_corpo = "La tua richiesta di convenzionamento è stata rifiutata. Il tuo laboratorio non è idoneo per il nostro sistema.
		
Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
	} else {
    	echo $conn->error;
    }
	   
		 
?>
