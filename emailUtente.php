<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Booking - Area privata Laboratorio</title>
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
                <li class=""><a href="prenotazione.php">Prenotazione</a></li>
				<li class="active"><a href="areaPrivata.php">Area privata</a></li>
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
              <h1 class="white">AREA PRIVATA - LABORATORIO</h1>
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
          <h2 class="ser-title">AREA PRIVATA - LABORATORIO</h2>
          <hr class="botm-line">
        </div>
               <div class="col-md-4 col-sm-4">
          <h3>Informazioni per contattarci</h3>
          <div class="space"></div>
          <p><em class="fa fa-envelope-o fa-fw pull-left fa-2x"></em> testbooking19@gmail.com</p>
          <div class="space"></div>
          <p><em class="fa fa-phone fa-fw pull-left fa-2x"></em> +39 123 4567 890</p>
        </div>
		<div class="space"></div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
             <h3 class="cnt-ttl" align="center">Invio esito utenti</h3>
            <div class="space"></div>
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
        $cf1 = $_POST['cf1'];
	
    $query1 = "SELECT email, esito FROM persona WHERE codice_fiscale = '$cf1'";	
	$result1 = mysqli_query($conn, $query1);
	
    if (mysqli_num_rows($result1) > 0) {
	   $rowData = mysqli_fetch_array($result1);
  	   $email = $rowData["email"];	  
       $esito = $rowData["esito"];  
      
//----------PRIMO-------------------------------------------------------------------------------------------------------------------------------------------- 


	   echo "<div id='invioDati' align='center'><h2 class='ser-title'><font color='green'><em class='fas fa-check-circle'></em> 
	   Dati inviati correttamente.</font></h2><br><a href='index.php' class='btn btn-primary'>Home</a></div>";
	   
	    $nome_mittente = "Da TestBooking - COVID-19";
		$mail_mittente = "testbooking19@gmail.com";
		$mail_destinatario = $email;

		$mail_oggetto = "Esito tampone Covid-19";
		$mail_corpo = "L'esito del tuo tampone è pronto:
		
Codice fiscale utente: $cf1
Esito tampone: $esito.
		
Saluti.";
		
		$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
		
	   
	  }
	  else {
		 echo "<h3>Nessun utente corrispondente a questo codice fiscale trovato.</h3><h3> Ricontrolla i campi inseriti e riprova.</h3><br><center><button type='button' onclick='javascript:history.back()' class='btn btn-primary'>Indietro</button></center>";
	    }

		 mysqli_close($conn);
		 
?>
      </div>
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