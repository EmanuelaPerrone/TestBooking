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
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"/>
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
              <h1 class="white">Prenotazione tamponi COVID-19</h1>
            </div>
			<div class="overlay-detail text-center">
              
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
		$citta_indirizzo = $_POST['citta_indirizzo'];
		$comune = $_POST['comune'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono']; 
		$citta = $_POST['citta'];
		$lab = $_POST['lab'];
		$tipo_tampone = $_POST['tipo_tampone'];
		$data_ora = $_POST['data_ora1'];
		$cf_min = $_POST['cf_min'];
        $nome_minore = $_POST['nome_minore'];
        $cognome_minore = $_POST['cognome_minore'];
		
		
// Con la post su città prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$query2 = "SELECT nome FROM citta WHERE id = ".$citta;
	$result = mysqli_query($conn, $query2);
	
    if (mysqli_num_rows($result) > 0) {
	  while($rowData = mysqli_fetch_array($result)){
  	   $nome_citta = $rowData["nome"];
	  }
    }
	
	// Con la post su lab prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$query3 = "SELECT nome, pec, indirizzo FROM laboratori WHERE id_lab = ".$lab;
	$result1 = mysqli_query($conn, $query3);
	
    if (mysqli_num_rows($result1) > 0) {
	  while($rowData = mysqli_fetch_array($result1)){
  	   $nome_lab = $rowData["nome"];
  	   $email_lab = $rowData["pec"];
  	   $indirizzo_lab = $rowData["indirizzo"];
	  }
    }
	
	// Con la post su tipo_tampone prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$query4 = "SELECT tipologia, prezzo FROM tamponi WHERE id = ".$tipo_tampone;
	$result2 = mysqli_query($conn, $query4);
	
    if (mysqli_num_rows($result2) > 0) {
	  while($rowData = mysqli_fetch_array($result2)){
  	   $nome_tampone = $rowData["tipologia"];
	  }
    }
	
	$query5 = "SELECT nome FROM citta WHERE id = ".$citta_indirizzo;
	$result3 = mysqli_query($conn, $query5);
	
    if (mysqli_num_rows($result3) > 0) {
	  while($rowData = mysqli_fetch_array($result3)){
  	   $nome_citta_indirizzo = $rowData["nome"];
	  }
    }
	
	$query6 = "SELECT nome FROM comuni WHERE id = ".$comune;
	$result4 = mysqli_query($conn, $query6);
	
    if (mysqli_num_rows($result4) > 0) {
	  while($rowData = mysqli_fetch_array($result4)){
  	   $nome_comune = $rowData["nome"];
	  }
    }
	
	$query7 = "SELECT data_ora FROM calendario WHERE id = ".$data_ora;
	$result5 = mysqli_query($conn, $query7);
	
    if (mysqli_num_rows($result5) > 0) {
	  while($rowData = mysqli_fetch_array($result5)){
  	   $dataeora = $rowData["data_ora"];
	  }
    }
	 
	
	  // se il codice fiscale è diverso scrivo la query per inserire l'utente
    $query = "INSERT INTO persona (codice_esiti, codice_fiscale, nome, cognome, tess_san, domicilio, citta_indirizzo, comune,  email, telefono, citta, lab, tipo_tampone, data_ora, cf_min, nome_minore, cognome_minore) 
              VALUES ('$codice_esiti', '$codice_fiscale', '$nome', '$cognome', '$tess_san', '$domicilio', '$nome_citta_indirizzo', '$nome_comune', '$email', '$telefono', '$nome_citta', '$nome_lab', '$nome_tampone', '$dataeora', '$cf_min', '$nome_minore', '$cognome_minore')"; 
      
	 // Controllo se la query è avvenuta		 
	  if(mysqli_query($conn, $query)){	  
		  // Check ricevuta email
	    if (isset($_POST['ric'])) {
		 if (isset($_POST['minorenne'])) {
			 $numero_ricevuta = rand(1000112, 9989998);		 
          echo "<h3>Prenotazione effettuata!<br><br> Ti verrà mandata un email con le indicazioni necessarie. Il questionario anamnesi è stato inviato al laboratorio correttamente.</h3><br><a href='ricevuta.zip' class='btn btn-primary'><em class='fa fa-download'></em> Clicca qui per scaricare la ricevuta</a><br><p style='color:red;'><em class='fas fa-exclamation-circle'></em> Non potrai più scaricarla una volta chiusa questa pagina.</p><center><a href='index.php' class='btn btn-primary'><font color='white'>Home</font></a></center>";
	  
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Conferma prenotazione tampone Covid-19";
		$mail_corpo = "Ciao $nome $cognome, la tua prenotazione è andata a buon fine. Dovrai presentarti assieme al minore $nome_minore $cognome_minore a $nome_citta al $nome_lab - $indirizzo_lab, in data $dataeora munito di:
		
1) Documento d'identità,
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti.

Pagamento tampone effettuato.
Ricevuta numero: $numero_ricevuta.

Saluti.";

		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		 } else {
			 
	      $numero_ricevuta = rand(1000112, 9989998);		 
          echo "<h3>Prenotazione effettuata!<br><br> Ti verrà mandata un email con le indicazioni necessarie. Il questionario anamnesi è stato inviato al laboratorio correttamente.</h3><br><a href='ricevuta.zip' class='btn btn-primary'><em class='fa fa-download'></em> Clicca qui per scaricare la ricevuta</a><br><p style='color:red;'><em class='fas fa-exclamation-circle'></em> Non potrai più scaricarla una volta chiusa questa pagina.</p><center><a href='index.php' class='btn btn-primary'><font color='white'>Home</font></a></center>";
	  
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Conferma prenotazione tampone Covid-19";
		$mail_corpo = "Ciao $nome $cognome, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta al $nome_lab - $indirizzo_lab, in data $dataeora munito di:
		
1) Documento d'identità,
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti.

Pagamento tampone effettuato.
Ricevuta numero: $numero_ricevuta.

Saluti.";

		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);

		 } 
		}
	    else if (isset($_POST['minorenne'])) {
		    echo "<h3>Prenotazione effettuata!<br><br> Ti verrà mandata un email con le indicazioni necessarie. Il questionario anamnesi è stato inviato al laboratorio correttamente.</h3><br><center><a href='index.php' class='btn btn-primary'><font color='white'>Home</font></a></center>";
	  
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Conferma prenotazione tampone Covid-19";
		$mail_corpo = "Ciao $nome $cognome, la tua prenotazione è andata a buon fine. Dovrai presentarti assieme al minore $nome_minore $cognome_minore a $nome_citta al $nome_lab - $indirizzo_lab, in data $dataeora munito di:
		
1) Documento d'identità, 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti.
 
Saluti.";

		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
	   }
	   else {
		 echo "<h3>Prenotazione effettuata!<br><br> Ti verrà mandata un email con le indicazioni necessarie. Il questionario anamnesi è stato inviato al laboratorio correttamente.</h3><br><center><a href='index.php' class='btn btn-primary'><font color='white'>Home</font></a></center>";
	  
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Conferma prenotazione tampone Covid-19";
		$mail_corpo = "Ciao $nome $cognome, la tua prenotazione è andata a buon fine. Dovrai presentarti a $nome_citta al $nome_lab - $indirizzo_lab, in data $dataeora munito di:
		
1) Documento d'identità, 
2) Tessera sanitaria.

Potrai verificare l'esito sul nostro sito nella sezione 'Esiti tamponi' inserendo il tuo codice fiscale e il tuo codice esame: $codice_esiti.
 
Saluti.";

		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
	   }
	   
	  	 
	   
//-------Email laboratorio----------------------------------------------------------------------------------------------------------------------------

        $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email_lab;

		$mail_oggetto = "Prenotazione tampone Covid-19";
		$mail_corpo = "Prenotazione tampone: 

Codice fiscale: $codice_fiscale,
Nome: $nome,
Cognome: $cognome, 
Tessera sanitaria: $tess_san, 
Indirizzo: $domicilio, 
Città: $nome_citta_indirizzo,
Comune: $nome_comune, 
Email: $email, 
Telefono: $telefono, 
Città laboratorio: $nome_citta, 
Laboratorio: $nome_lab, 
Tipologia tampone: $nome_tampone, 
Data e ora: $dataeora, 
Minore: 
Codice fiscale: $cf_min, Nome: $nome_minore, Cognome: $cognome_minore,

Questionario anamnesi ricevuto.

";
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
	}  
	  else {
		 echo "<h3 style='font-family: Open Sans'>Prenotazione fallita.<br>Il codice fiscale inserito corrisponde già ad una prenotazione non conclusa. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una prenotazione con questi dati.</h3><br><center><button type='button' onclick='javascript:history.back()' class='btn btn-primary'>Indietro</button></center>";				 
	    } 
		 mysqli_close($conn);
		 
?>
</div>
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
