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
              <h1 class="white">PRENOTAZIONE TAMPONE UTENTE</h1>
            </div>
            <div class="overlay-detail text-center">
              
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
          <p><em class="fa fa-phone fa-fw pull-left fa-2x"></em> +39 123 4567 890</p>
        </div>
		<div class="space"></div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl" align="center">Prenotazione per utente</h3>
            <div class="space"></div>
			
          
	<!-- FORM PRENOTAZIONE TERZI -->

  <form id="regForm" method="post" action="prenota.php" role="form" class="contactForm" enctype="multipart/form-data">
  
   <div class="tab">
			  
              <div class="form-group"><strong style="color: black">Codice Fiscale*</strong><br>
			   <input type="text" class="form-control br-radius-zero" name="codice_fiscale" id="codice_fiscale" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$" placeholder="Codice fiscale*" required data-rule="minlen:13" maxlength="16" data-msg="Inserisci un codice fiscale valido"/>
				<div class="validation"></div>
              </div>			  
              <div class="form-group"><strong style="color: black">Nome*</strong><br>
                <input type="text" name="nome" class="form-control br-radius-zero" id="nome" placeholder="Nome*" data-rule="minlen:3" required data-msg="Controlla questo campo" />
                <div class="validation"></div>
              </div>
              <div class="form-group"><strong style="color: black">Cognome*</strong><br>
                <input type="text" class="form-control br-radius-zero" name="cognome" id="cognome" placeholder="Cognome*" data-rule="minlen:3" required data-msg="Controlla questo campo" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Numero tessera sanitaria*</strong><br>
                <input type="text" class="form-control br-radius-zero" name="tess_san" id="tess_san" pattern="^[0-9]{20}" title="Il numero di tessera sanitaria deve essere di 20 numeri." placeholder="Numero tessera sanitaria*" maxlength="20" required data-msg="Controlla questo campo" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Indirizzo*</strong><br>
                <input type="text" class="form-control br-radius-zero" name="domicilio" id="domicilio" placeholder="Es. Via Mazzini, 1" required data-msg="Controlla questo campo" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Email*</strong><br>
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Email*" data-rule="email" maxlength="100" required data-msg="Inserisci un'email valida" />
                <div class="validation"></div>
              </div>
			  <div class="form-group"><strong style="color: black">Numero di telefono*</strong><br>
                <input type="tel" class="form-control br-radius-zero" name="telefono" id="telefono" pattern="^[0-9]{10}" title="Il numero di telefono deve contenere 10 numeri." placeholder="Numero di telefono*" data-rule="minlen:4" maxlength="10" required data-msg="Inserisci un numero di telefono valido" />
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
	<select name="citta_indirizzo" required id="citta_indirizzo"> 
		<option selected disabled value="">Seleziona la provincia </option> 
		<?php 
			while ($r=mysqli_fetch_array($query))
			{   
				echo  '<option value = "' . $r['id']. '">' . $r["nome"]."</option>"; 
			} 
		?> 
	</select></div>
	
	          <div class="form-group"><strong style="color: black">Comune*</strong><br>
              <select name="comune" required id="comune"> 
	          <option selected disabled value="">Seleziona il comune</option > 
	          </select>	
              <div class="validation"></div>
			  </div>
			  
	<script>
$(document).ready(function(){
	
 $('#citta_indirizzo').on('change', function(){ 
	
       codprov1 = $(this).val();
         if(codprov1!=0){
           $.ajax({
           type:'POST',
           url:'select.php', 
           data:'codprov1='+codprov1, 
           success:function(rispostahtml){
           $('#comune').html(rispostahtml);
           }
          }); 
        }else{
          $('#comune').html('<option value="">Seleziona il tampone</option>');
       }
    });
 });
 
</script>	
			  
			  
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
    <div class="form-group"><strong style="color: black">Città laboratorio*</strong><br>
	<select name="citta" id="citta2" required> 
		<option selected disabled value="">Seleziona la città </option> 
		<?php 
			while ($r=mysqli_fetch_array($query))
			{   
				echo  '<option value = "' . $r['id']. '">' . $r["nome"]."</option>"; 
			} 
		?> 
	</select >
              <div class="validation"></div>
              </div>
  
              <div class="form-group"><strong style="color: black">Laboratorio analisi*</strong><br>
              <select name="lab" id="lab2" required> 
	          <option selected disabled value="">Seleziona il laboratorio</option> 
	          </select>	
              <div class="validation"></div>
			  </div>
			  <div class="form-group"><strong style="color: black">Tipologia tampone e costo*</strong><br>
              <select name="tipo_tampone" onclick="abilitaPagamento()" required id="tamp"> 
	          <option selected disabled value="">Seleziona il tampone</option> 
	          </select>
			  <script>
			  function abilitaPagamento(){
				 document.getElementById("pagamento").removeAttribute("disabled"); 
			  }
			  </script>
              <p><a href="guida.php">Non sai cosa scegliere?</a></p>			  
              <div class="validation"></div>
			  </div>
			  <div class="form-group"><strong style="color: black">Seleziona data e ora*</strong><br>
			   <select name="data_ora1" required id="data_ora"> 
	          <option selected disabled value="">Seleziona giorno e ora</option> 
	          </select>
              </div>
			  
			  <!-- Script jQuery e Ajax per laboratori -->
<script>
$(document).ready(function(){
	
    $('#citta2').on('change', function(){ 
	
        codRegione = $(this).val();
        if(codRegione!=0){
            $.ajax({
                type:'POST',
                url:'select.php', 
                data:'codRegione='+codRegione, 
                success:function(rispostahtml){
                   $('#lab2').html(rispostahtml); 
				    $('#tamp').html('<option value="">Seleziona il laboratorio</option>'); 
                }
            }); 
        }else{
           $('#lab2').html('<option value="">Seleziona il laboratorio</option>');
		   $('#tamp').html('<option value="">Seleziona il tampone </option>'); 
        }
    });
	
			  <!-- Script jQuery e Ajax per i tamponi -->
			  
 $('#lab2').on('change', function(){ 
	
       codprov = $(this).val();
         if(codprov!=0){
           $.ajax({
           type:'POST',
           url:'select.php', 
           data:'codprov='+codprov, 
           success:function(rispostahtml){
           $('#tamp').html(rispostahtml);
		   $('#data_ora').html('<option value="">Seleziona il tampone</option>'); 
           }
          }); 
        }else{
          $('#tamp').html('<option value="">Seleziona il tampone</option>');
		  $('#data_ora').html('<option value="">Seleziona giorno e ora</option>');
       }
    });
	
  
 $('#tamp').on('change', function(){ 
	
       codprov2 = $(this).val();
         if(codprov2!=0){
           $.ajax({
           type:'POST',
           url:'select.php', 
           data:'codprov2='+codprov2, 
           success:function(rispostahtml){
           $('#data_ora').html(rispostahtml);
           }
          }); 
        }else{
          $('#data_ora').html('<option value="">Seleziona data e ora</option>');
       }
    });
 });	

</script><br>
			
			  
			  <h2><em class="fas fa-clipboard-list"></em> Questionario anamnesi</h2><br>
			    <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Hai mai avuto sintomi?</label>
                 <input type="radio" id="html" name="fav_language" required value="Si">
                 <label for="html">Si</label> 
                 <input type="radio" id="css" name="fav_language" value="No">
                 <label for="css">No</label><br>

                 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Malattie Croniche</label>
                 <input type="radio" id="age1" required name="age" value="Si">
                 <label for="age1">Si</label>
                 <input type="radio" id="age2" name="age" value="No">
                 <label for="age2">No</label><br> 
			  
			  <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Vaccinazione influenza</label>
                 <input type="radio" id="html1" required name="fav_language1" value="Si">
                 <label for="html1">Si</label> 
                 <input type="radio" id="css1" name="fav_language1" value="No">
                 <label for="css1">No</label><br>
			  
			 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Febbre</label>
                 <input type="radio" id="html2" required name="fav_language2" value="Si">
                 <label for="html2">Si</label> 
                 <input type="radio" id="css2" name="fav_language2" value="No">
                 <label for="css2">No</label><br>
			  
			 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Tosse - Mal di gola</label>
                 <input type="radio" id="html3" required name="fav_language3" value="Si">
                 <label for="html3">Si</label> 
                 <input type="radio" id="css3" name="fav_language3" value="No">
                 <label for="css3">No</label><br>
			  
			 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Malessere - Dolori muscolari</label>
                 <input type="radio" id="html4" required name="fav_language4" value="Si">
                 <label for="html4">Si</label> 
                 <input type="radio" id="css3" name="fav_language4" value="No">
                 <label for="css4">No</label><br>
			  
			  <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Respiro affannoso</label>
                 <input type="radio" id="html5" required name="fav_language5" value="Si">
                 <label for="html5">Si</label> 
                 <input type="radio" id="css5" name="fav_language5" value="No">
                 <label for="css5">No</label><br>
			  
			 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Assenza di gusto e olfatto</label>
                 <input type="radio" id="html6" required name="fav_language6" value="Si">
                 <label for="html6">Si</label> 
                 <input type="radio" id="css6" name="fav_language6" value="No">
                 <label for="css6">No</label><br>
			  
			  <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Mal di testa</label>
                 <input type="radio" id="html7" required name="fav_language7" value="Si">
                 <label for="html7">Si</label> 
                 <input type="radio" id="css7" name="fav_language7" value="No">
                 <label for="css7">No</label><br>
			  
			   <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Vomito e/o Diarrea</label>
                 <input type="radio" id="html8" required name="fav_language8" value="Si">
                 <label for="html8">Si</label> 
                 <input type="radio" id="css8" name="fav_language8" value="No">
                 <label for="css8">No</label><br>
			  
			  <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Sei stato a contatto con un caso Covid accertato?</label>
                 <input type="radio" id="html9" required name="fav_language9" value="Si">
                 <label for="html9">Si</label> 
                 <input type="radio" id="css9" name="fav_language9" value="No">
                 <label for="css9">No</label><br>
			  
			   <p style="color:black"><u><strong> Negli ultimi 10 giorni:</u></strong></p>
			   <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Hai frequentato ospedali, strutture sanitarie, ambulatori medici?</label>
                 <input type="radio" id="html11" required name="fav_language11" value="Si">
                 <label for="html11">Si</label> 
                 <input type="radio" id="css11" name="fav_language11" value="No">
                 <label for="css11">No</label><br>
			  
			 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Hai frequentato la scuola?</label>
                 <input type="radio" id="html12" required name="fav_language12" value="Si">
                 <label for="html12">Si</label> 
                 <input type="radio" id="css12" name="fav_language12" value="No">
                 <label for="css12">No</label><br>
			  
			 <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Hai frequentato luoghi di aggregazione collettiva?</label>
                 <input type="radio" id="html13" required name="fav_language13" value="Si">
                 <label for="html13">Si</label> 
                 <input type="radio" id="css13" name="fav_language13" value="No">
                 <label for="css13">No</label><br>
			  
			  <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Hai lavorato?</label>
                 <input type="radio" id="html14" required name="fav_language14" value="Si">
                 <label for="html14">Si</label> 
                 <input type="radio" id="css14" name="fav_language14" value="No">
                 <label for="css14">No</label><br>
			  
			  
			  <em class="fas fa-chevron-circle-right"></em> <label style="color: black"> Hai viaggiato fuori dalla regione?</label>
                 <input type="radio" id="html15" required name="fav_language15" value="Si">
                 <label for="html15">Si</label> 
                 <input type="radio" id="css15" name="fav_language15" value="No">
                 <label for="css15">No</label><br><br>
              
			  <div class="form-action">
			  <input type="checkbox" required id="privacy" value="Privacy Accettata" class="required"/>       
              <a href="https://www.normattiva.it/uri-res/N2Ls?urn:nir:stato:decreto.legislativo:2003-06-30;196!vig=" target="_blank" > Ho letto e accetto l'Informativa sulla Privacy </a>  		  
			  </div>
			  <div class="form-action">
			  <input type="checkbox" required id="fake" onclick="modalAttivo()" value="Fake" class="required" />       
              <a href="https://www.brocardi.it/codice-penale/libro-secondo/titolo-vii/capo-iv/art495.html" target="_blank"> Ho letto e accetto le condizioni in caso di falsa dichiarazione di dati </a>  	  
			  </div><br>
			  
			  <button type="reset" class="btn btn-primary">Resetta dati</button>
			  <button onclick="effettuaPagamento()" name="ric" id="pagamento" disabled class="btn btn-primary">Effettua pagamento</button>
              <button type="submit" id="loco" disabled class="btn btn-primary">Paga in loco e prenota</button>
			  <script>

			  function effettuaPagamento(){
				  
				var selectDaVerificare = document.getElementById("tamp");
                var indiceSelezionato = selectDaVerificare.selectedIndex; 
				var valoreSelezionato = selectDaVerificare.options[indiceSelezionato];
                var prezzo = valoreSelezionato.text;
								
                    prompt("PAGAMENTO TAMPONE\n Inserisci intestatario: ");	
                    prompt("Inserisci carta di credito: \n");	
                    prompt("Inserisci CVV: \n");	
                    prompt("Inserisci data di scadenza: \n");	
					confirm("Confermi il pagamento del tampone " + prezzo + "?");

                   }
			  </script>              		  
   </div>
  </form>
	
	<!-- FINE FORM PER TERZI -->
	
     </div>
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