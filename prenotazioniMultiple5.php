<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Booking - Prenotazione</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!-- SEZIONE HOME -->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" alt="img" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
               <li class=""><a href="index.php">Home</a></li>
                <li class=""><a href="guida.php">Guida</a></li>
                <li class=""><a href="areaLab.php">Convenzioni Laboratori</a></li>
                <li class=""><a href="esitiTamponi.php">Esiti tamponi Covid-19</a></li>
                <li class="active"><a href="prenotazione.php">Prenotazione</a></li>
				<li class=""><a href="areaPrivata.php">Area privata</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info" style="padding-top: 100px;">
            <div class="banner-logo text-center">
              <img src="img/logo1.png" alt="img" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">PRENOTAZIONE TAMPONE TERZI</h1>
            </div>
            <div class="overlay-detail text-center">
              <a href="#"><em class="fa fa-angle-down"></em></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FINE HOME -->
  <!-- SEZIONE ESITI TAMPONI -->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Prenotazione</h2>
          <hr class="botm-line">
        </div>
         <div class="col-md-12 col-sm-4">
<?php

 $host = "localhost";
 $user = "testbooking";
 $pass = ".";
 $db = "my_testbooking";
			  
  $conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) {
      die("Connessione al database fallita: " . $conn->connect_error);
    }	
	
				 
		// Recupero i valori
		$a = bin2hex(openssl_random_pseudo_bytes(6));
		$codice_esiti = strtoupper($a);
	    $cf = $_POST['codice_fiscale'];
		$codice_fiscale = strtoupper($cf);
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
		$tess_san = $_POST['tess_san'];
		$domicilio = $_POST['domicilio'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono']; 
		$citta_indirizzo = $_POST['citta_indirizzo']; 
		$comune = $_POST['comune']; 
		$citta = $_POST['citta'];
		$lab = $_POST['lab'];
		$tipo_tampone = $_POST['tipo_tampone'];
		$data_ora = $_POST['data_ora'];
		$cf_min = $_POST['cf_min'];
		$nome_minore = $_POST['nome_minore'];
		$cognome_minore = $_POST['cognome_minore'];
		
		$a1 = bin2hex(openssl_random_pseudo_bytes(6));
		$codice_esiti1 = strtoupper($a1);
	    $cf1 = $_POST['codice_fiscale1'];
		$codice_fiscale1 = strtoupper($cf1);
        $nome1 = $_POST['nome1'];
        $cognome1 = $_POST['cognome1'];
		$tess_san1 = $_POST['tess_san1'];
		$domicilio1 = $_POST['domicilio1'];
        $email1 = $_POST['email1'];
        $telefono1 = $_POST['telefono1']; 
		$citta_indirizzo1 = $_POST['citta_indirizzo1']; 
		$comune1 = $_POST['comune1']; 
		$citta1 = $_POST['citta1'];
		$lab1 = $_POST['lab1'];
		$tipo_tampone1 = $_POST['tipo_tampone1'];
		$data_ora1 = $_POST['data_ora1'];
		$cf_min2 = $_POST['cf_min2'];
		$nome_minore2 = $_POST['nome_minore2'];
		$cognome_minore2 = $_POST['cognome_minore2'];
		
		$a2 = bin2hex(openssl_random_pseudo_bytes(6));
		$codice_esiti2 = strtoupper($a2);
	    $cf2 = $_POST['codice_fiscale2'];
		$codice_fiscale2 = strtoupper($cf2);
        $nome2 = $_POST['nome2'];
        $cognome2 = $_POST['cognome2'];
		$tess_san2 = $_POST['tess_san2'];
		$domicilio2 = $_POST['domicilio2'];
        $email2 = $_POST['email2'];
        $telefono2 = $_POST['telefono2']; 
		$citta_indirizzo2 = $_POST['citta_indirizzo2']; 
		$comune2 = $_POST['comune2']; 
		$citta2 = $_POST['citta2'];
		$lab2 = $_POST['lab2'];
		$tipo_tampone2 = $_POST['tipo_tampone2'];
		$data_ora2 = $_POST['data_ora2'];
		$cf_min3 = $_POST['cf_min3'];
		$nome_minore3 = $_POST['nome_minore3'];
		$cognome_minore3 = $_POST['cognome_minore3'];
		
		$a3 = bin2hex(openssl_random_pseudo_bytes(6));
		$codice_esiti3 = strtoupper($a3);
	    $cf3 = $_POST['codice_fiscale3'];
		$codice_fiscale3 = strtoupper($cf3);
        $nome3 = $_POST['nome3'];
        $cognome3 = $_POST['cognome3'];
		$tess_san3 = $_POST['tess_san3'];
		$domicilio3 = $_POST['domicilio3'];
        $email3 = $_POST['email3'];
        $telefono3 = $_POST['telefono3']; 
		$citta_indirizzo4 = $_POST['citta_indirizzo4']; 
		$comune3 = $_POST['comune3']; 
		$citta3 = $_POST['citta3'];
		$lab3 = $_POST['lab3'];
		$tipo_tampone3 = $_POST['tipo_tampone3'];
		$data_ora3 = $_POST['data_ora3'];
		$cf_min4 = $_POST['cf_min4'];
		$nome_minore4 = $_POST['nome_minore4'];
		$cognome_minore4 = $_POST['cognome_minore4'];
		
		$a4 = bin2hex(openssl_random_pseudo_bytes(6));
		$codice_esiti4 = strtoupper($a4);
	    $cf4 = $_POST['codice_fiscale4'];
		$codice_fiscale4 = strtoupper($cf4);
        $nome4 = $_POST['nome4'];
        $cognome4 = $_POST['cognome4'];
		$tess_san4 = $_POST['tess_san4'];
		$domicilio4 = $_POST['domicilio4'];
        $email4 = $_POST['email4'];
        $telefono4 = $_POST['telefono4']; 
		$citta_indirizzo123 = $_POST['citta_indirizzo123']; 
		$comune123 = $_POST['comune123']; 
		$citta123 = $_POST['citta123'];
		$lab123 = $_POST['lab123'];
		$tipo_tampone123 = $_POST['tipo_tampone123'];
		$data_ora123 = $_POST['data_ora123'];
		$cf_min4 = $_POST['cf_min5'];
		$nome_minore4 = $_POST['nome_minore5'];
		$cognome_minore4 = $_POST['cognome_minore5'];
		
// Con la post su città prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$quer2 = "SELECT nome FROM citta WHERE id = ".$citta;
	$result = mysqli_query($conn, $quer2);
	
    if (mysqli_num_rows($result) > 0) {
	  while($rowData = mysqli_fetch_array($result)){
  	   $nome_citta = $rowData["nome"];
	  }
    }
	
	// Con la post su lab prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$quer3 = "SELECT nome FROM laboratori WHERE id_lab = ".$lab;
	$result1 = mysqli_query($conn, $quer3);
	
    if (mysqli_num_rows($result1) > 0) {
	  while($rowData = mysqli_fetch_array($result1)){
  	   $nome_lab = $rowData["nome"];
	  }
    }
	
	// Con la post su tipo_tampone prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$quer4 = "SELECT tipologia, prezzo FROM tamponi WHERE id = ".$tipo_tampone;
	$result2 = mysqli_query($conn, $quer4);
	
    if (mysqli_num_rows($result2) > 0) {
	  while($rowData = mysqli_fetch_array($result2)){
  	   $nome_tampone = $rowData["tipologia"];
	  }
    }
	
	$quer8 = "SELECT nome FROM citta WHERE id = ".$citta_indirizzo;
	$result6 = mysqli_query($conn, $quer8);
	
    if (mysqli_num_rows($result6) > 0) {
	  while($rowData = mysqli_fetch_array($result6)){
  	   $nome_citta_indirizzo = $rowData["nome"];
	  }
    }
	
	$quer9 = "SELECT nome FROM comuni WHERE id = ".$comune;
	$result7 = mysqli_query($conn, $quer9);
	
    if (mysqli_num_rows($result7) > 0) {
	  while($rowData = mysqli_fetch_array($result7)){
  	   $nome_comune = $rowData["nome"];
	  }
    }
	
	$query10 = "SELECT data_ora FROM calendario WHERE id = ".$data_ora;
	$res = mysqli_query($conn, $query10);
	
    if (mysqli_num_rows($res) > 0) {
	  while($rowData = mysqli_fetch_array($res)){
  	   $dataeora = $rowData["data_ora"];
	  }
    }
	
//--------------------------------------------------------------------------------------------------------------------------------
	
	// Con la post su città prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$quer5 = "SELECT nome FROM citta WHERE id = ".$citta1;
	$result3 = mysqli_query($conn, $quer5);
	
    if (mysqli_num_rows($result3) > 0) {
	  while($rowData = mysqli_fetch_array($result3)){
  	   $nome_citta1 = $rowData["nome"];
	  }
    }
	
	// Con la post su lab prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$quer6 = "SELECT nome FROM laboratori WHERE id_lab = ".$lab1;
	$result4 = mysqli_query($conn, $quer6);
	
    if (mysqli_num_rows($result4) > 0) {
	  while($rowData = mysqli_fetch_array($result4)){
  	   $nome_lab1 = $rowData["nome"];
	  }
    }
	
	// Con la post su tipo_tampone prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$quer7 = "SELECT tipologia, prezzo FROM tamponi WHERE id = ".$tipo_tampone1;
	$result5 = mysqli_query($conn, $quer7);
	
    if (mysqli_num_rows($result5) > 0) {
	  while($rowData = mysqli_fetch_array($result5)){
  	   $nome_tampone1 = $rowData["tipologia"];
	  }
    }
	
	$quer8 = "SELECT nome FROM citta WHERE id = ".$citta_indirizzo1;
	$result6 = mysqli_query($conn, $quer8);
	
    if (mysqli_num_rows($result6) > 0) {
	  while($rowData = mysqli_fetch_array($result6)){
  	   $nome_citta_indirizzo1 = $rowData["nome"];
	  }
    }
	
	$quer10 = "SELECT nome FROM comuni WHERE id = ".$comune1;
	$result8 = mysqli_query($conn, $quer10);
	
    if (mysqli_num_rows($result8) > 0) {
	  while($rowData = mysqli_fetch_array($result8)){
  	   $nome_comune1 = $rowData["nome"];
	  }
    }
	
	$query11 = "SELECT data_ora FROM calendario WHERE id = ".$data_ora1;
	$res1 = mysqli_query($conn, $query11);
	
    if (mysqli_num_rows($res1) > 0) {
	  while($rowData = mysqli_fetch_array($res1)){
  	   $dataeora1 = $rowData["data_ora"];
	  }
    }
	
//-----------------------------------------------------------------------------------------------------------------------------------------------------
	$abc = "SELECT nome FROM citta WHERE id = ".$citta2;
	$r1 = mysqli_query($conn, $abc);
	
    if (mysqli_num_rows($r1) > 0) {
	  while($rowData = mysqli_fetch_array($r1)){
  	   $nome_citta2 = $rowData["nome"];
	  }
    }
	
	// Con la post su lab prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$abc1 = "SELECT nome FROM laboratori WHERE id_lab = ".$lab2;
	$r2 = mysqli_query($conn, $abc1);
	
    if (mysqli_num_rows($r2) > 0) {
	  while($rowData = mysqli_fetch_array($r2)){
  	   $nome_lab2 = $rowData["nome"];
	  }
    }
	
	// Con la post su tipo_tampone prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$abc3 = "SELECT tipologia, prezzo FROM tamponi WHERE id = ".$tipo_tampone2;
	$r3 = mysqli_query($conn, $abc3);
	
    if (mysqli_num_rows($r3) > 0) {
	  while($rowData = mysqli_fetch_array($r3)){
  	   $nome_tampone2 = $rowData["tipologia"];
	  }
    }
	
	$abc4 = "SELECT nome FROM citta WHERE id = ".$citta_indirizzo2;
	$r4 = mysqli_query($conn, $abc4);
	
    if (mysqli_num_rows($r4) > 0) {
	  while($rowData = mysqli_fetch_array($r4)){
  	   $nome_citta_indirizzo2 = $rowData["nome"];
	  }
    }
	
	$abc5 = "SELECT nome FROM comuni WHERE id = ".$comune2;
	$r5 = mysqli_query($conn, $abc5);
	
    if (mysqli_num_rows($r5) > 0) {
	  while($rowData = mysqli_fetch_array($r5)){
  	   $nome_comune2 = $rowData["nome"];
	  }
    }
	
	$abc6 = "SELECT data_ora FROM calendario WHERE id = ".$data_ora2;
	$r6 = mysqli_query($conn, $abc6);
	
    if (mysqli_num_rows($r6) > 0) {
	  while($rowData = mysqli_fetch_array($r6)){
  	   $dataeora2 = $rowData["data_ora"];
	  }
    }
//----------------------------------------------------------------------------------------------------------------------------------------------------------

	$bnm = "SELECT nome FROM citta WHERE id = ".$citta3;
	$ree1 = mysqli_query($conn, $bnm);
	
    if (mysqli_num_rows($ree1) > 0) {
	  while($rowData = mysqli_fetch_array($ree1)){
  	   $nome_citta3 = $rowData["nome"];
	  }
    }
	
	// Con la post su lab prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$bnm1 = "SELECT nome FROM laboratori WHERE id_lab = ".$lab3;
	$ree2 = mysqli_query($conn, $bnm1);
	
    if (mysqli_num_rows($ree2) > 0) {
	  while($rowData = mysqli_fetch_array($ree2)){
  	   $nome_lab3 = $rowData["nome"];
	  }
    }
	
	// Con la post su tipo_tampone prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$bnm2 = "SELECT tipologia, prezzo FROM tamponi WHERE id = ".$tipo_tampone3;
	$ree3 = mysqli_query($conn, $bnm2);
	
    if (mysqli_num_rows($ree3) > 0) {
	  while($rowData = mysqli_fetch_array($ree3)){
  	   $nome_tampone3 = $rowData["tipologia"];
	  }
    }
	
	$bnm3 = "SELECT nome FROM citta WHERE id = ".$citta_indirizzo4;
	$ree3 = mysqli_query($conn, $bnm3);
	
    if (mysqli_num_rows($ree3) > 0) {
	  while($rowData = mysqli_fetch_array($ree3)){
  	   $nome_citta_indirizzo4 = $rowData["nome"];
	  }
    }
	
	$bnm4 = "SELECT nome FROM comuni WHERE id = ".$comune3;
	$ree4 = mysqli_query($conn, $bnm4);
	
    if (mysqli_num_rows($ree4) > 0) {
	  while($rowData = mysqli_fetch_array($ree4)){
  	   $nome_comune3 = $rowData["nome"];
	  }
    }
	
	$bnm5 = "SELECT data_ora FROM calendario WHERE id = ".$data_ora3;
	$ree5 = mysqli_query($conn, $bnm5);
	
    if (mysqli_num_rows($ree5) > 0) {
	  while($rowData = mysqli_fetch_array($ree5)){
  	   $dataeora3 = $rowData["data_ora"];
	  }
    }
	
//----------------------------------------------------------------------------------------------------------------------------------------------------------

	$mnjgfkj = "SELECT nome FROM citta WHERE id = ".$citta123;
	$opopopo = mysqli_query($conn, $mnjgfkj);
	
    if (mysqli_num_rows($opopopo) > 0) {
	  while($rowData = mysqli_fetch_array($opopopo)){
  	   $nome_citta4 = $rowData["nome"];
	  }
    }
	
	// Con la post su lab prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$mnjgfkj1 = "SELECT nome FROM laboratori WHERE id_lab = ".$lab123;
	$opopopo1 = mysqli_query($conn, $mnjgfkj1);
	
    if (mysqli_num_rows($opopopo1) > 0) {
	  while($rowData = mysqli_fetch_array($opopopo1)){
  	   $nome_lab4 = $rowData["nome"];
	  }
    }
	
	// Con la post su tipo_tampone prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$mnjgfkj2 = "SELECT tipologia, prezzo FROM tamponi WHERE id = ".$tipo_tampone123;
	$opopopo2 = mysqli_query($conn, $mnjgfkj2);
	
    if (mysqli_num_rows($opopopo2) > 0) {
	  while($rowData = mysqli_fetch_array($opopopo2)){
  	   $nome_tampone4 = $rowData["tipologia"];
	  }
    }
	
	$mnjgfkj3 = "SELECT nome FROM citta WHERE id = ".$citta_indirizzo123;
	$opopopo3 = mysqli_query($conn, $mnjgfkj3);
	
    if (mysqli_num_rows($opopopo3) > 0) {
	  while($rowData = mysqli_fetch_array($opopopo3)){
  	   $nome_citta_indirizzo5 = $rowData["nome"];
	  }
    }
	
	$mnjgfkj4 = "SELECT nome FROM comuni WHERE id = ".$comune123;
	$opopopo4 = mysqli_query($conn, $mnjgfkj4);
	
    if (mysqli_num_rows($opopopo4) > 0) {
	  while($rowData = mysqli_fetch_array($opopopo4)){
  	   $nome_comune4 = $rowData["nome"];
	  }
    }
	
	$mnjgfkj5 = "SELECT data_ora FROM calendario WHERE id = ".$data_ora123;
	$opopopo5 = mysqli_query($conn, $mnjgfkj5);
	
    if (mysqli_num_rows($opopopo5) > 0) {
	  while($rowData = mysqli_fetch_array($opopopo5)){
  	   $dataeora4 = $rowData["data_ora"];
	  }
    }	

//-----------------------------------------------------------------------------------------------------------------------------------------------------
	  
    $query = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti', '$codice_fiscale', '$nome', '$cognome', '$tess_san', '$domicilio', '$nome_citta_indirizzo', '$nome_comune', '$email', '$telefono', '$nome_citta', '$nome_lab', '$nome_tampone', '$dataeora', '$cf_min', '$nome_minore', '$cognome_minore')";

    $query1 = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti1', '$codice_fiscale1', '$nome1', '$cognome1', '$tess_san1', '$domicilio1', '$nome_citta_indirizzo1', '$nome_comune1', '$email1', '$telefono1', '$nome_citta1', '$nome_lab1', '$nome_tampone1', '$dataeora1', '$cf_min2', '$nome_minore2', '$cognome_minore2')";			  
			  
	$query2 = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti2', '$codice_fiscale2', '$nome2', '$cognome2', '$tess_san2', '$domicilio2', '$nome_citta_indirizzo2', '$nome_comune2', '$email2', '$telefono2', '$nome_citta2', '$nome_lab2', '$nome_tampone2', '$dataeora2', '$cf_min3', '$nome_minore3', '$cognome_minore3')";
   
    $query3 = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti3', '$codice_fiscale3', '$nome3', '$cognome3', '$tess_san3', '$domicilio3', '$nome_citta_indirizzo4', '$nome_comune3', '$email3', '$telefono3', '$nome_citta3', '$nome_lab3', '$nome_tampone3', '$dataeora3', '$cf_min4', '$nome_minore4', '$cognome_minore4')";
   
    $query4 = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti4', '$codice_fiscale4', '$nome4', '$cognome4', '$tess_san4', '$domicilio4', '$nome_citta_indirizzo5', '$nome_comune4', '$email4', '$telefono4', '$nome_citta4', '$nome_lab4', '$nome_tampone4', '$dataeora4', '$cf_min5', '$nome_minore5', '$cognome_minore5')";
   		 
//----------------- Invio email -------------------------------------------------------------------------------------------------------------		 
	  if(mysqli_query($conn, $query)) {
     	 if(mysqli_query($conn, $query1)) {
           if(mysqli_query($conn, $query2)) {			 
            if(mysqli_query($conn, $query3)) {
              if(mysqli_query($conn, $query4)) {				
	 
         echo "<h3>Prenotazione effettuata!<br><br>Verranno inviate delle email agli indirizzi corrispondenti con le indicazioni necessarie.</h3><br><center><button type='button' class='btn btn-primary'><a href='index.php' style='color: white'>Home</a></button></center>";
	  
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Conferma prenotazione tampone Covid-19";
		$mail_corpo = "Ciao $nome $cognome, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta presso il laboratorio $nome_lab , in data $dataeora munito di:
		
1) Documento d'identità 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti.

Saluti.";

		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
	     

// -----Seconda email--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


	    $nome_mittente1 = "Da TestBooking - COVID-19";
		$mail_mittente1 = "testbooking19@gmail.com";
		$mail_destinatario1 = $email1;

		$mail_oggetto1 = "Conferma prenotazione tampone Covid-19";
		$mail_corpo1 = "Ciao $nome1 $cognome1, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta1 presso il laboratorio $nome_lab1 , in data $dataeora1 munito di:
		
1) Documento d'identità 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti1.

Saluti.";

		$mail_headers1 = "From: " .  $nome_mittente1 . " <" .  $mail_mittente1 . ">\r\n";
        $mail_headers1 .= "Reply-To: " .  $mail_mittente1 . "\r\n";
        $mail_headers1 .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario1, $mail_oggetto1, $mail_corpo1, $mail_headers1);
		
// -----Terza email-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


	    $nome_mittente2 = "Da TestBooking - COVID-19";
		$mail_mittente2 = "testbooking19@gmail.com";
		$mail_destinatario2 = $email2;

		$mail_oggetto2 = "Conferma prenotazione tampone Covid-19";
		$mail_corpo2 = "Ciao $nome2 $cognome2, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta2 presso il laboratorio $nome_lab2 , in data $dataeora2 munito di:
		
1) Documento d'identità 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti2.

Saluti.";

		$mail_headers2 = "From: " .  $nome_mittente2 . " <" .  $mail_mittente2 . ">\r\n";
        $mail_headers2 .= "Reply-To: " .  $mail_mittente2 . "\r\n";
        $mail_headers2 .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario2, $mail_oggetto2, $mail_corpo2, $mail_headers2);
		
// -----Quarta email-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


	    $nome_mittente3 = "Da TestBooking - COVID-19";
		$mail_mittente3 = "testbooking19@gmail.com";
		$mail_destinatario3 = $email3;

		$mail_oggetto3 = "Conferma prenotazione tampone Covid-19";
		$mail_corpo3 = "Ciao $nome3 $cognome3, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta3 presso il laboratorio $nome_lab3 , in data $dataeora3 munito di:
		
1) Documento d'identità 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti3.

Saluti.";

		$mail_headers3 = "From: " .  $nome_mittente3 . " <" .  $mail_mittente3 . ">\r\n";
        $mail_headers3 .= "Reply-To: " .  $mail_mittente3 . "\r\n";
        $mail_headers3 .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario3, $mail_oggetto3, $mail_corpo3, $mail_headers3);		
		
// -----Quinta email-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


	    $nome_mittente4 = "Da TestBooking - COVID-19";
		$mail_mittente4 = "testbooking19@gmail.com";
		$mail_destinatario4 = $email4;

		$mail_oggetto4 = "Conferma prenotazione tampone Covid-19";
		$mail_corpo4 = "Ciao $nome4 $cognome4, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta4 presso il laboratorio $nome_lab4 , in data $dataeora4 munito di:
		
1) Documento d'identità 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti4.

Saluti.";

		$mail_headers4 = "From: " .  $nome_mittente4 . " <" .  $mail_mittente4 . ">\r\n";
        $mail_headers4 .= "Reply-To: " .  $mail_mittente4 . "\r\n";
        $mail_headers4 .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario4, $mail_oggetto4, $mail_corpo4, $mail_headers4);			
	     
//-----Altrimenti--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	  
	  
	    } 
		else {
		   echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nei dati del quinto utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
	      }
	    } 
		else {
		   echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nei dati del quarto utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
	      }
    	} 
		else {
		   echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nei dati del terzo utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
	      }
	   } 
	   else {
		   echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nei dati del secondo utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
	      }
	  } 
	  else {
		   echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nei dati del primo utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
	      }
  
	
		 mysqli_close($conn);
		 
?>
  </div>
    </div>
  </section>
  <!-- FINE SEZIONE ESITI -->
<!-- FOOTER -->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Sviluppatori</h4>
            </div>
            <div class="info-sec">
			  <ul class="quick-info">
                <li><em class="fa fa-circle"></em> Cristina De Florio</a></li>
				<li><em class="fa fa-circle"></em> Elisabetta Bonfrate</a></li>
                <li><em class="fa fa-circle"></em> Emanuela Perrone</a></li>
				<li><em class="fa fa-circle"></em> Margareth Eloisa Violetta Bottiglione</a></li>
			  </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Collegamenti rapidi</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.php"><em class="fa fa-circle"></em> Home</a></li>
                <li><a href="guida.php"><em class="fa fa-circle"></em> Guida</a></li>
                <li><a href="esitiTamponi.php"><em class="fa fa-circle"></em> Esiti tamponi</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Kairos 2021. All Rights Reserved
            <div class="credits">
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- FINE FOOTER -->
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/mioJS.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

