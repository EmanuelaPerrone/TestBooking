<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Booking - Convenzioni Laboratori</title>
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
                <li class="active"><a href="areaLab.php">Convenzioni Laboratori</a></li>
                <li class=""><a href="esitiTamponi.php">Esiti tamponi Covid-19</a></li>
                <li class=""><a href="prenotazione.php">Prenotazione</a></li>
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
              <h1 class="white">CONVENZIONI LABORATORI</h1>
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
  <!--SEZIONE AREA LABORATORI -->
  
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Convenzioni Laboratori</h2>
            <hr class="botm-line">
            <p class="sec-para">Questa sezione è dedicata ai laboratori analisi.<br>Puoi inviare la tua richiesta di convenzionamento compilando il form che segue.</p>
            <a href="guida.php" style="color: #0cb8b6; padding-top:10px;">Altro...</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <em class="fa fa-angle-right" aria-hidden="true"></em> </div>
              <div class="more-features-box-text-description">
                <h3>Form per richiesta convenzionamento</h3>
              </div>
			  <form action="lab.php" method="post" role="form" class="contactForm">			  
              <div class="form-group"><strong style="color: black">Denominazione laboratorio*</strong><br>
                <input type="text" name="nome" class="form-control br-radius-zero" id="nome" placeholder="Nome*" data-rule="minlen:3" required data-msg="Inserisci almeno 3 caratteri" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Partita IVA*</strong><br>
                <input type="text" name="iva" class="form-control br-radius-zero" id="iva" placeholder="Partita IVA*" pattern="^[0-9]{11}" title="Inserisci 11 cifre numeriche." data-rule="minlen:13" maxlength="11" required data-msg="Inserisci 11 caratteri" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Indirizzo*</strong><br>
                <input type="text" name="indirizzo" class="form-control br-radius-zero" id="indirizzo" placeholder="Indirizzo*" data-rule="minlen:13" required data-msg="Inserisci un indirizzo valido" />
                <div class="validation"></div>
              </div>
			  
<?php 
$server="localhost";
$username="testbooking";
$password=".";
$database="my_testbooking";
$conn=mysqli_connect($server,$username,$password,$database); 
if($conn)
{
	mysqli_query($conn,"SET NAMES 'utf8'");
	mysqli_set_charset($conn,'utf8');            
}
else
{
	echo "Errore numero ".mysqli_errno($conn). "nella connessione
	al server"."<br/>Descrizione errore ".mysqli_error($conn);
}
     $s  =  "Select* From citta Order By nome" ; 
    $query  =  mysqli_query($conn,$s); 
?>
              <div class="form-group"><strong style="color: black">Città*</strong><br>
	          <select name="citta" id="citta"> 
	          <option selected disabled value = "0" >Seleziona la città </option > 
		      <?php 
		     	while ($r=mysqli_fetch_array($query)){   
				 echo  '<option value = "' . $r['id']. '">' . $r["nome"]."</option>"; 
			    } 
		      ?> 
	          </select>
              <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">PEC*</strong><br>
                <input type="email" class="form-control br-radius-zero" name="pec" id="pec" placeholder="PEC*" data-rule="email" maxlength="100" required data-msg="Inserisci un'email valida" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Numero di telefono*</strong><br>
                <input type="tel" onClick="controllaCF()" class="form-control br-radius-zero" name="telefono" id="telefono" placeholder="Numero di telefono*" data-rule="minlen:4" maxlength="10" required data-msg="Inserisci un numero di telefono valido" />
                <div class="validation"></div>
              </div>
			  </div>
			  <div class="form-action">
			  <input type="checkbox" required name="privacy" value="Privacy Accettata" class="required" />       
              <a href="https://www.normattiva.it/uri-res/N2Ls?urn:nir:stato:decreto.legislativo:2003-06-30;196!vig=" target="_blank" > Ho letto e accetto l'Informativa sulla Privacy </a>     
			  </div>
			  <div class="form-action">
			  <input type="checkbox" required id="fake" onclick="modalAttivo()" value="Fake" class="required" />       
              <a href="https://www.brocardi.it/codice-penale/libro-secondo/titolo-vii/capo-iv/art495.html" target="_blank"> Ho letto e accetto le condizioni in caso di falsa dichiarazione di dati </a>  	  
			  </div><br>
              <div class="form-action">
			    <button type="reset" class="btn btn-primary">Resetta dati</button>
                <input type="submit" class="btn btn-primary" value="Invia richiesta">
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FINE AREA LABORATORI -->
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