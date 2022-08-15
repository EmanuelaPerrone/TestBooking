<?php 

header("Content-type: text/html; charset=utf-8");
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

if(!empty($_POST["codRegione"])) { 
    $codRegione=$_POST["codRegione"];
    $s = "Select* From laboratori Where approvato = 1 AND id_citta = ".$codRegione; 
    $query = mysqli_query($conn,$s); 
    echo '<option value="">Seleziona il laboratorio</option>'; 
    while($r = mysqli_fetch_array($query))
	{  
        echo '<option value="'.$r['id_lab'].'">'.$r['nome'].' - '.$r['indirizzo'].'</option>'; 
    }    
} 
else {
	
   if(!empty($_POST["codprov"])){ 
     $codprov=$_POST["codprov"];
     $a = "Select * From tamponi Where id_laboratorio = ".$codprov." Order By id";  
     $query1 = mysqli_query($conn,$a); 
     echo '<option value="">Seleziona il tampone</option>'; 
     while($b = mysqli_fetch_array($query1)){  
	 
        echo '<option value="'.$b['id'].'">'.$b['tipologia'].' - '.$b['prezzo'].'</option>'; 
     }    
   }
}

if(!empty($_POST["codprov1"])){ 
     $codprov1=$_POST["codprov1"];
     $g = "Select * From comuni Where id_citta = ".$codprov1." Order By nome";  
     $query11 = mysqli_query($conn,$g); 
     echo '<option value="">Seleziona il comune</option>'; 
     while($z = mysqli_fetch_array($query11)){  
	 
        echo '<option value="'.$z['id'].'">'.$z['nome'].'</option>';  
     }    
   }
   
   if(!empty($_POST["codprov2"])){ 
     $codprov2=$_POST["codprov2"];
     $abc = "Select * From calendario Where id_tampone = ".$codprov2." Order By data_ora";  
     $query111 = mysqli_query($conn,$abc); 
     echo '<option value="">Seleziona giorno e ora</option>'; 
     while($zzz = mysqli_fetch_array($query111)){  
	 
        echo '<option value="'.$zzz['id'].'">'.$zzz['data_ora'].'</option>';  
     }    
   }
?>