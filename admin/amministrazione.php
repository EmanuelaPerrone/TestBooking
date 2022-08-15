<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Booking - Amministrazione</title>
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
			    <li class="active"><a href="amministrazione.php">Amministrazione</a></li>
                <li class=""><a href="index.php">Home</a></li>   
                <li class=""><a href="guida.php">Guida</a></li>
                <li class=""><a href="areaLab.php">Convenzioni Laboratori</a></li>
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
              <h1 class="white">AMMINISTRAZIONE</h1>
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
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">AMMINISTRAZIONE</h2>
          <hr class="botm-line">
		  <h3 class="ser-title">Laboratori in attesa:</h3><br>
		  
        </div>
         <div class="col-md-12 col-sm-4">
<?php


	include_once("dbConnect.php");
    global $conn;
    $query = "SELECT * FROM laboratori WHERE approvato is NULL";

    
	  // Controllo se la query è avvenuta		 
	  $result = $conn->query($query);
	  if(!$result) {
		  echo "<font face='Open Sans'><h3>Operazione fallita. Errore col database.</h3></font><br><center><a href='index.php' class='btn btn-primary'>Home</a></center>";				  
	  } else {
		  while($riga = $result->fetch_assoc()) {
             echo '➤ '.$riga["codice_univoco"].' - '.$riga["id_lab"].' - '.$riga["id_citta"].' - '.$riga["nome"].' - '.$riga["iva"].' - '.$riga["indirizzo"].' - '.$riga["citta"].' - '.$riga["pec"].' - '.$riga["telefono"].
			 ' - <button type="button" onclick="accettato(\''.$riga["codice_univoco"].'\')" name="accettato" class="btn btn-success">Accetta</button>  <button type="button" onclick="rifiutato(\''.$riga["codice_univoco"].'\')" name="rifiutato" class="btn btn-danger">Rifiuta</button></br>';
          }
	  }
	   	 		  
	 mysqli_close($conn);
			
?>

<h3 class="ser-title">Richieste aziende sanitarie in attesa:</h3><br>
<?php


 $host = "localhost";
 $user = "testbooking";
 $pass = ".";
 $db = "my_testbooking";
			  
  $conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) {
      die("Connessione al database fallita: " . $conn->connect_error);
    }
    $query1 = "SELECT email FROM amministrazione WHERE dati_inviati is NULL";

    
	  // Controllo se la query è avvenuta		 
	  $result1 = $conn->query($query1);
	  if(!$result) {
		  echo "<font face='Open Sans'><h3>Operazione fallita. Errore col database.</h3></font><br><center><a href='index.php' class='btn btn-primary'>Home</a></center>";				  
	  } else {
		  while($riga1 = $result1->fetch_assoc()) {
             echo '➤ Email azienda sanitaria: '.$riga1["email"].'- <button type="button" onclick="invia(\''.$riga1["email"].'\')" name="invia" class="btn btn-success">Invia dati</button>';
          }
	  }
	   	 		  
	 mysqli_close($conn);
			
?>

<h3 class="ser-title">Disponibilità laboratori da aggiornare:</h3><br>
<?php


 $host = "localhost";
 $user = "testbooking";
 $pass = ".";
 $db = "my_testbooking";
			  
  $conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) {
      die("Connessione al database fallita: " . $conn->connect_error);
    }
	
    $lab = "SELECT codice_lab, date_disponibili FROM amministrazione WHERE dati_inviati = 1";
    $res_lab = $conn->query($lab);
	
	if ($res_lab->num_rows > 0) {
      while($rigaLab = $res_lab->fetch_assoc()) {
	    $codice_lab = $rigaLab['codice_lab'];
	    $date_disponibili = $rigaLab['date_disponibili'];
       }
	 }
	 
	   $nome_laboratorio = "SELECT nome FROM laboratori WHERE codice_univoco = '$codice_lab'";
	   $res_lab1 = $conn->query($nome_laboratorio);
	   
	   if ($res_lab1->num_rows > 0) {
        while($rigaLab1 = $res_lab1->fetch_assoc()) {
	     echo '<p id="disp" style="color:black">➤ Codice laboratorio: '.$codice_lab.'<br>Nome laboratorio: '.$rigaLab1['nome'].'<br>Data disponibile: '.$date_disponibili.                                                             
			 '<br><br><button type="button" name="accettato" onclick="elimina()" class="btn btn-success">Inserisci</button>  <button type="button" name="rifiutato" onclick="elimina()" class="btn btn-danger">Elimina</button></p><br>';
       }
	 }     	 
		
	 mysqli_close($conn);
			
?>

<h3 class="ser-title">Datori di lavoro in attesa:</h3><br>
<?php


 $host = "localhost";
 $user = "testbooking";
 $pass = ".";
 $db = "my_testbooking";
			  
  $conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) {
      die("Connessione al database fallita: " . $conn->connect_error);
    }
	
    $dat = "SELECT emailDatore, codiceDatore FROM amministrazione WHERE emailDatore is not NULL AND codiceDatore is not NULL";
    $res_dat = $conn->query($dat);
	
	if ($res_dat->num_rows > 0) {
      while($rigaDat = $res_dat->fetch_assoc()) {
	    $emailDatore = $rigaDat['emailDatore'];
	    $codiceDatore = $rigaDat['codiceDatore'];
      echo '<p id="disp" style="color:black">➤ <b>Email datore di lavoro: </b>'.$rigaDat['emailDatore'].'<br><b>Codice: </b>'.$rigaDat['codiceDatore'].                                                             
      '<br><br><button type="button" name="accettato" onclick="accettaDatore(\''.$rigaDat["emailDatore"].'\')" class="btn btn-success">Accetta</button>  
      <button type="button" name="rifiutato" onclick="rifiutaDatore(\''.$rigaDat["emailDatore"].'\')" class="btn btn-danger">Rifiuta</button></p><br>';
      }
	 } 	 
		
	 mysqli_close($conn);
			
?>

<h3 class="ser-title">Medici in attesa:</h3><br>
<?php


 $host = "localhost";
 $user = "testbooking";
 $pass = ".";
 $db = "my_testbooking";
			  
  $conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) {
      die("Connessione al database fallita: " . $conn->connect_error);
    }
	
    $dat1 = "SELECT emailMedico, codiceMedico FROM amministrazione WHERE emailMedico is not NULL AND codiceMedico is not NULL";
    $res_dat1 = $conn->query($dat1);
	
	if ($res_dat1->num_rows > 0) {
      while($rigaDat1 = $res_dat1->fetch_assoc()) {
	    $emailMedico = $rigaDat1['emailMedico'];
	    $codiceMedico = $rigaDat1['codiceMedico'];
      echo '<p id="disp" style="color:black">➤ <b>Email datore di lavoro: </b>'.$rigaDat1['emailMedico'].'<br><b>Codice: </b>'.$rigaDat1['codiceMedico'].                                                             
      '<br><br><button type="button" name="accettato" onclick="accettaMedico(\''.$rigaDat1["emailMedico"].'\')" class="btn btn-success">Accetta</button>  
      <button type="button" name="rifiutato" onclick="rifiutaMedico(\''.$rigaDat1["emailMedico"].'\')" class="btn btn-danger">Rifiuta</button></p><br>';
      }
	 } 	 
		
	 mysqli_close($conn);
			
?>

<script>

function accettaDatore(emailDatore){
  $.ajax({   
     url: 'datoreAcc.php',
     type: 'GET',
     data:({emailDatore:emailDatore}),
     success: function(msg) {
       alert("Datore di lavoro accettato: " + msg);
     }
   });
}

function rifiutaDatore(emailDatore){
  $.ajax({   
     url: 'datoreRif.php',
     type: 'GET',
     data:({emailDatore:emailDatore}),
     success: function(msg) {
       alert("Datore di lavoro rifiutato: " + msg);
     }
   });
}

function accettaMedico(emailMedico){
  $.ajax({   
     url: 'medicoAcc.php',
     type: 'GET',
     data:({emailMedico:emailMedico}),
     success: function(msg) {
       alert("Medico accettato: " + msg);
     }
   });
}

function rifiutaMedico(emailMedico){
  $.ajax({   
     url: 'medicoRif.php',
     type: 'GET',
     data:({emailMedico:emailMedico}),
     success: function(msg) {
       alert("Medico rifiutato: " + msg);
     }
   });
}

function accettato(codice_univoco){
	$.ajax({   
     url: 'accettato.php',
     type: 'GET',
     data:({codice_univoco:codice_univoco}),
     success: function(msg) {
       alert("Laboratorio accettato: " + msg);
     }
   });
}

function rifiutato(codice_univoco){
	$.ajax({   
     url: 'rifiutato.php',
     type: 'GET',
     data:({codice_univoco:codice_univoco}),
     success: function(msg) {
       alert("Laboratorio rifiutato: " + msg);
     }
   });
}

function invia(email){
	$.ajax({   
     url: 'invia.php',
     type: 'GET',
     data:({email:email}),
     success: function(msg) {
       alert("Dati " + msg);
     }
   });
}

function elimina(){
  var togli = document.getElementById("disp");
  togli.remove();
}

</script>
     </div>
	 </div>
    </div>
  </section>
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
