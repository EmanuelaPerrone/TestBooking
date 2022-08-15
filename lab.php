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
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
		$b = bin2hex(openssl_random_pseudo_bytes(6));
		$codice_univoco = strtoupper($b);
		$nome = $_POST['nome'];
		$iva = $_POST['iva'];
		$indirizzo = $_POST['indirizzo'];
		$citta = $_POST['citta'];
		$pec = $_POST['pec'];
        $telefono = $_POST['telefono']; 
		

    // Con la post su città prendo l'id - Ho bisogno di fare una select per prendere il nome avendo l'id	
	$query2 = "SELECT nome FROM citta WHERE id = ".$citta;
	$result = mysqli_query($conn, $query2);
	
    if (mysqli_num_rows($result) > 0) {
	  while($rowData = mysqli_fetch_array($result)){
  	   $nome_citta = $rowData["nome"];
	  }
    }
  
    $query = "INSERT INTO laboratori (codice_univoco, id_citta, nome, iva, indirizzo, citta, pec, telefono) 
              VALUES ('$codice_univoco', '$citta', '$nome','$iva', '$indirizzo', '$nome_citta', '$pec', '$telefono')"; 
    
	 // Controllo se la query è avvenuta		 
	  if(mysqli_query($conn, $query)){	
   		echo "<h3 style='font-weight: 300;'>Operazione effettuata!<br><br><em style='color: red;' class='fas fa-exclamation-triangle'></em> Per far si che la richiesta venga inoltrata, il titolare del laboratorio dovrà inviare all'indirizzo email <strong><u>testbooking19@gmail.com</u></strong> la copia della sua carta d'identità 
       e la copia della Partita Iva del laboratorio d'analisi. Una volta che il controllo dei dati andrà a buon fine verrà inviata un email di approvazione del convenzionamento o in caso contrario,
       di richiesta respinta.</h3>
       <br><center><button type='button' class='btn btn-primary'><a href='index.php' style='color:white'>Home</a></button></center>";
	    
		$nome_mittente = $nome;
		$mail_mittente = $email;
		$mail_destinatario = "testbooking19@gmail.com";

		$mail_oggetto = "Richiesta convenzionamento";
		$mail_corpo = "
Richiesta di convenzionamento da parte del laboratorio:

Denominazione: $nome;
PEC: $email;
Partita IVA: $iva;
Indirizzo: $indirizzo;
Città: $citta;
Telefono: $telefono.

In attesa di approvazione o rifiuto.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 
		
	  } else {
		 echo "<h3 style='font-family: Open Sans'>Operazione fallita. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una richiesta con questi dati.</h3><br><center><button type='button' onclick='javascript:history.back()' class='btn btn-primary'>Indietro</button></center>";				 
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
