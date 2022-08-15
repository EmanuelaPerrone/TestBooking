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
              <h1 class="white">PRENOTAZIONE TAMPONE AZIENDA</h1>
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
          <p><em class="fa fa-phone fa-fw pull-left fa-2x"></em> +39 123 4567 890</p><br>
        </div>
        <h3 class="cnt-ttl" style="font-weight: 200;" align="center">Email confermata!<br><br>Compila il form che segue:</h3>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
          

<!-- inizio form -->
          <form id="regForm" method="post" action="azienda.php" role="form" class="contactForm">
   
   <div class="tab">
			  <div class="form-group"><strong style="color: black">Denominazione azienda*</strong><br>
			   <input type="text" class="form-control br-radius-zero" name="nome" id="nome" placeholder="Denominazione*" required data-rule="minlen:13" data-msg="Inserisci un codice fiscale valido"/>
				<div class="validation"></div>
              </div>			  
              <div class="form-group"><strong style="color: black">Partita IVA*</strong><br>
                <input type="text" name="partita_iva" class="form-control br-radius-zero" id="partita_iva" placeholder="Partita IVA*" maxlength="11" required data-msg="Controlla questo campo" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">PEC*</strong><br>
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="PEC*" data-rule="email" required data-msg="Inserisci un'email valida" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Numero di telefono*</strong><br>
                <input type="tel" class="form-control br-radius-zero" name="telefono" id="telefono" maxlength="10" placeholder="Numero di telefono*" required data-msg="Inserisci un numero di telefono valido" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Indirizzo*</strong><br>
                <input type="text" class="form-control br-radius-zero" name="domicilio" id="domicilio" placeholder="Indirizzo*" required data-msg="Controlla questo campo" />
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
    <div class="form-group"><strong style="color: black">Provincia*</strong><br>
	<select name="citta" required id="citta_indirizzo1"> 
		<option selected disabled value="">Seleziona la Provincia </option> 
		<?php 
			while ($r=mysqli_fetch_array($query))
			{   
				echo  '<option value = "' . $r['id']. '">' . $r["nome"]."</option>"; 
			} 
		?> 
	</select></div>
	
	          <div class="form-group"><strong style="color: black">Comune*</strong><br>
              <select name="comune" id="comune1" required> 
	          <option selected disabled value="">Seleziona il Comune</option> 
	          </select>	
              <div class="validation"></div>
			  </div>
			  
	<script>
$(document).ready(function(){
	
 $('#citta_indirizzo1').on('change', function(){ 
	
       codprov1 = $(this).val();
         if(codprov1!=0){
           $.ajax({
           type:'POST',
           url:'select.php', 
           data:'codprov1='+codprov1, 
           success:function(rispostahtml){
           $('#comune1').html(rispostahtml);
           }
          }); 
        }else{
          $('#comune1').html('<option value="">Seleziona il tampone</option>');
       }
    });
 });
 
</script>	
	  
		

			  <div class="form-action">
			  <input type="checkbox" required id="privacy" value="Privacy Accettata" class="required" />       
              <a href="https://www.normattiva.it/uri-res/N2Ls?urn:nir:stato:decreto.legislativo:2003-06-30;196!vig=" target="_blank" > Ho letto e accetto l'Informativa sulla Privacy </a>  		  
			  </div>
			  <div class="form-action">
			  <input type="checkbox" required id="fake" onclick="modalAttivo1()" value="Fake" class="required" />       
              <a href="https://www.brocardi.it/codice-penale/libro-secondo/titolo-vii/capo-iv/art495.html" target="_blank"> Ho letto e accetto le condizioni in caso di falsa dichiarazione di dati </a>  	  
			  </div><br>
			  
			  <button type="reset" class="btn btn-primary">Resetta dati</button>
			  <button type="submit" name="ric" id="pagamento" disabled class="btn btn-primary">Prosegui</button>
       		  
   </div>
  </form>
<!-- fine form -->
        
     <?php 
          $host = "localhost";
          $user = "testbooking";
          $pass = ".";
          $db = "my_testbooking";
                       
           $conn = new mysqli($host, $user, $pass, $db);
             if ($conn->connect_error) {
               die("Connessione al database fallita: " . $conn->connect_error);
             }	

             $email = $_GET["email"];

             $emailAz = "INSERT INTO amministrazione (datore) VALUES ('$email')";
             if(mysqli_query($conn, $emailAz)){
              // ok
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