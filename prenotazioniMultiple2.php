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
		$cf_min1 = $_POST['cf_min1'];
		$nome_minore1 = $_POST['nome_minore1'];
		$cognome_minore1 = $_POST['cognome_minore1'];
		
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
	

	  
    $query = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti', '$codice_fiscale', '$nome', '$cognome', '$tess_san', '$domicilio', '$nome_citta_indirizzo', '$nome_comune', '$email', '$telefono', '$nome_citta', '$nome_lab', '$nome_tampone', '$dataeora', '$cf_min', '$nome_minore', '$cognome_minore')";

    $query1 = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune, email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti1', '$codice_fiscale1', '$nome1', '$cognome1', '$tess_san1', '$domicilio1', '$nome_citta_indirizzo1', '$nome_comune1', '$email1', '$telefono1', '$nome_citta1', '$nome_lab1', '$nome_tampone1', '$dataeora1', '$cf_min1', '$nome_minore1', '$cognome_minore1')";			  
   
   
   		 
//----------------- Invio email -------------------------------------------------------------------------------------------------------------		 
	  if(mysqli_query($conn, $query)) {
     	 if(mysqli_query($conn, $query1)) {		  
	 
         echo "<h3>Prenotazione effettuata!<br><br>Verranno inviate delle email agli indirizzi corrispondenti con le indicazioni necessarie.</h3><br><center><button type='button' class='btn btn-primary'><a href='index.php' style='color:white'>Home</a></button></center>";
	  
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Conferma prenotazione tampone Covid-19";
		$mail_corpo = "Ciao $nome $cognome, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta presso il laboratorio $nome_lab , in data $dataeora munito di:
		
1) Documento d'identità 
2) Questionario anamnesico compilato e firmato da te.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti.

Saluti.";

		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
	     

// -----Seconda email------------------------------------------------------------------------------------------------------------------------


	    $nome_mittente1 = "Da TestBooking - COVID-19";
		$mail_mittente1 = "testbooking19@gmail.com";
		$mail_destinatario1 = $email1;

		$mail_oggetto1 = "Conferma prenotazione tampone Covid-19";
		$mail_corpo1 = "Ciao $nome1 $cognome1, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta1 presso il laboratorio $nome_lab1 , in data $dataeora1 munito di:
		
1) Documento d'identità 
2) Questionario anamnesico compilato e firmato da te.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti1.

Saluti.";

		$mail_headers1 = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers1 .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers1 .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario1, $mail_oggetto1, $mail_corpo1, $mail_headers1);
	     
	  
    	 } else {
		   echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nella compilazione del secondo utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
	      }
	  }
	  else {
		 echo "<h3 style='font-family: Open Sans'>Prenotazione fallita. Errore nella compilazione del primo utente. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
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

