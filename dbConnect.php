<?php 
	 $host = "localhost";
     $user = "testbooking";
     $pass = ".";
     $db = "my_testbooking";

			  
	  $conn = new mysqli($host, $user, $pass, $db);
		 if ($conn->connect_error) {
           die("Connessione al database fallita: " . $conn->connect_error);
         }			  			 
?>