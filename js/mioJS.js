 window.onload = function(){
	document.getElementById("terzi").style.display="none";
  }
  
  function tamponeSingolo(){
   document.getElementById("tipoPrenotazione").style.display="none";  
   document.getElementById("terzi").style.display="block";
  }
  
  function formTerzi(){
   document.getElementById("terzi").style.display="none";
	document.getElementById("tipoPrenotazione").style.display="none";
    document.getElementById("popup_email").style.display="block";
  }
 
   function modalAttivo(){	 
     document.getElementById("loco").removeAttribute("disabled");	 
   }
   function modalAttivo1(){
	 document.getElementById("pagamento").removeAttribute("disabled");	 
   }
   

	function ricevuta(){
	 var valid = true;
     var checkbox = document.getElementById("ric");
     var text = document.getElementById("richiesto3");
	 
	 if(checkbox.checked) {
	   valid = true; 
     } 
	 else {
	  text.style.display = "block";
	  valid = false;
     }
	 
	 if (valid) {
      document.getElementById("regForm").submit();
     }
       return valid; // return the valid status
	}
	
	
	
   function indietro(){
	   window.history.go(-1);
   }

 
   
//----------------------------------------------------------------------------------------------------------------------------------------------
        
      // Funzione jquery campi minorenne     
 $(document).ready(function () {
    $('#colorCheckbox').on('change', function () {
        if (!this.checked) {
            $("#animazione").fadeOut(800);
            $("#voce").fadeOut(800);
        }
        else{
          $("#animazione").fadeIn(800);
          $("#voce").fadeIn(800);
        }
    });
});

    

  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function controllaCF(){
          // Definisco una regExp per il confronto
          var pattern = /^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$/;
          // creo una variabile per richiamare con facilità il nostro campo di input
          var CodiceFiscale = document.getElementById("codice_fiscale");

  // utilizzo il metodo search per verificare che il valore inserito nel campo
  // di input rispetti la stringa di verifica (pattern)
  if (CodiceFiscale.value.search(pattern) == -1){
    // In caso di errore stampo un avviso
     document.getElementById('cf').innerHTML = 'Inserisci un codice fiscale corretto.';
    CodiceFiscale.focus();
  } else{
    document.getElementById('cf').innerHTML = "";
  }
}

// Multi form

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
	document.getElementById("prenotaBtn").style.display = "inline";  
    document.getElementById("prevBtn").style.display = "none";
  } else {
	document.getElementById("prenotaBtn").style.display = "none";  
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
	
    document.getElementById("nextBtn").innerHTML = "Prenota";
  } else {
    document.getElementById("nextBtn").innerHTML = "Prosegui al pagamento";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}



function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}



