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
  <link rel="stylesheet" type="text/css" href="css/stileForm.css">
  	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
</head>

<body id="myPage">
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
                <li class=""><a href="areaLab.php">Area Laboratori</a></li>
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
              <h1 class="white">PRENOTAZIONE TAMPONE PER DIPENDENTI</h1>
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
  <!-- SEZIONE PRENOTAZIONE -->

 <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Prenotazione</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Informazioni per contattarci</h3>
          <div class="space"></div>
          <p><em class="fa fa-envelope-o fa-fw pull-left fa-2x"></em> testbooking19@gmail.com</p>
          <div class="space"></div>
          <p><em class="fa fa-phone fa-fw pull-left fa-2x"></em> +39 123 4567 890</p><br>
        </div>
		<div class="space"></div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">

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
		$nome = $_POST['nome'];
	  $partita_iva = $_POST['partita_iva'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$domicilio = $_POST['domicilio'];
		$citta = $_POST['citta'];
		$comune = $_POST['comune'];

    $query1 = "SELECT nome FROM citta WHERE id = ".$citta;
	$result1 = mysqli_query($conn, $query1);
	
    if (mysqli_num_rows($result1) > 0) {
	  while($rowData = mysqli_fetch_array($result1)){
  	   $nome_citta_indirizzo = $rowData["nome"];
	  }
    }
	
	$query2 = "SELECT nome FROM comuni WHERE id = ".$comune AND "id_citta =".$citta;
	$result2 = mysqli_query($conn, $query2);
	
    if (mysqli_num_rows($result2) > 0) {
	  while($rowData = mysqli_fetch_array($result2)){
  	   $nome_comune = $rowData["nome"];
	  }
    }

    $query3 = "INSERT INTO aziende (codice_esiti, nome, partita_iva, email, telefono, domicilio, citta_indirizzo, comune) 
    VALUES ('$codice_esiti', '$nome', '$partita_iva', '$email', '$telefono', '$domicilio', '$nome_citta_indirizzo', '$nome_comune')";
    

    if (mysqli_query($conn, $query3)) {

           echo "<h3 class='cnt-ttl' style='font-weight: 200;' align='center'>Dati inviati correttamente!<br><br><em style='color: red;' class='fas fa-exclamation-triangle'></em> Per 
           poter effettuare una o più prenotazioni come datore di lavoro, dovrai inviare all'indirizzo email <strong><u>testbooking19@gmail.com</u></strong> la copia 
           della tua carta d'identità e la copia della Partita IVA dell'azienda. Una volta che i dati verranno verificati, riceverai un codice con cui poter 
           prenotare il tampone per tuoi dipendenti.</h3>";

           $nome_mittente = "Da TestBooking - COVID-19";
	  	     $mail_mittente = "testbooking19@gmail.com";
		       $mail_destinatario = $email;

		       $mail_oggetto = "Codice datore di lavoro";
		       $mail_corpo = "La tua richiesta è stata approvata. I dati sono stati verificati e ora puoi prenotare come datore di lavoro.	
	
Il tuo codice per effettuare prenotazioni è: $codice_esiti. 

!!! NON PERDERE QUESTA INFORMAZIONE !!!

Saluti.";
		
		    $mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

		      mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers); 

    }  else {
      echo "<font face='Open Sans'><h3>Operazione fallita. Controlla che i campi siano corretti ed assicurati di non aver già effettuato una richiesta con questi dati.</h3></font><br><center><button type='button' onclick='window.history.go(-1); return false;' class='btn btn-primary'>Indietro</button></center>";				 
       } 
?>

    </div>
   </div>
  </div>
</section>  
<!-- FINE PRENOTAZIONE -->
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
