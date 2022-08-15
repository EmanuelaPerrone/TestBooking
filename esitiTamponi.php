<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Booking - Esiti tamponi Covid-19</title>
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
                <li class="active"><a href="esitiTamponi.php">Esiti tamponi Covid-19</a></li>
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
              <h1 class="white">ESITI TAMPONI COVID-19</h1>
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
          <h2 class="ser-title">Esiti tamponi COVID-19</h2>
          <hr class="botm-line">
        </div>
         <div class="col-md-4 col-sm-4">
		 <br><h2><em class="fas fa-user"></em> Utente</h2><br>
          <form action="esitiUtente.php" method="post" role="form" class="contactForm">
		  <div class="form-group"><strong style="color: black">Codice Fiscale utente*</strong><br>
			<input type="text" class="form-control br-radius-zero" name="codice_fiscale" id="codice_fiscale" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$" placeholder="Codice fiscale*" required title="Il codice fiscale è composto da 16 caratteri alfanumerici" maxlength="16" data-msg="Inserisci un codice fiscale valido"/>
            <div class="validation"></div>
          </div>   		  
		  <div class="form-group"><strong style="color: black">Codice esame*</strong><br>
            <input type="text" name="codice_esiti" class="form-control br-radius-zero" id="codice_esiti1" title="Inserisci un codice fiscale valido." placeholder="Codice esame*" maxlength="12" required data-msg="Inserisci almeno 3 caratteri" />
          <div class="validation"></div>
          </div>
		   <div class="form-action">
           <input type="submit" class="btn btn-primary" value="Visualizza esito">
		   </form>
          </div></div>
		  
		  <div class="col-md-4 col-sm-4">
		 <br><h2><em class="fas fa-user-md"></em> Medico</h2><br>
          <form action="esitiMedico.php" method="post" role="form" class="contactForm">
		  <div class="form-group"><strong style="color: black">Codice Fiscale medico*</strong><br>
			<input type="text" class="form-control br-radius-zero" name="codice_fiscale1" id="codice_fiscale" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$" placeholder="Codice fiscale*" required title="Inserisci un codice fiscale valido." maxlength="16" data-msg="Inserisci un codice fiscale valido"/>
            <div class="validation"></div>
          </div>   		  
		  <div class="form-group"><strong style="color: black">Codice esame*</strong><br>
            <input type="text" name="codice_esiti1" class="form-control br-radius-zero" id="codice_esiti1" title="Il codice esame è composto da 12 caratteri alfanumerici." placeholder="Codice esame*" maxlength="12" required data-msg="Inserisci almeno 3 caratteri" />
          <div class="validation"></div>
          </div>
		   <div class="form-action">
           <input type="submit" class="btn btn-primary" value="Visualizza esito">
		   </form>
          </div></div>
		  
		  <div class="col-md-4 col-sm-4">
		  <br><h2><em class="fas fa-briefcase"></em> Datore di lavoro</h2><br>
          <form action="esitiAzienda.php" method="post" role="form" class="contactForm">
		  <div class="form-group"><strong style="color: black">Partita IVA*</strong><br>
			<input type="text" class="form-control br-radius-zero" name="iva" id="iva" pattern="^[0-9]{11}$" placeholder="Partita IVA*" required title="La partita iva è composta da 11 caratteri numerici." maxlength="11" data-msg="Inserisci un codice fiscale valido"/>
            <div class="validation"></div>
          </div>   		  
		  <div class="form-group"><strong style="color: black">Codice esame*</strong><br>
            <input type="text" name="codice_esiti2" class="form-control br-radius-zero" id="codice_esiti2" title="Il codice esame è composto da 12 caratteri alfanumerici." placeholder="Codice esame*" maxlength="12" required data-msg="Inserisci almeno 3 caratteri" />
          <div class="validation"></div>
          </div>
		   <div class="form-action">
           <input type="submit" class="btn btn-primary" value="Visualizza esito">
          </div></div>
         </div>
		</form>
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