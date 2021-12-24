<?php
	require('config.php');
	/*require 'auth.php';*/

if(isset($_GET['id']))
{	

$sql0 = "SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.dot, cuvanje.dubinaSare, cuvanje.felna, cuvanje.sezona , cuvanje.kolicina,
	mesto.mestoCelo, cuvanje.datum, cuvanje.precnik FROM cuvanje 
                      JOIN korisnik ON cuvanje.idKorisnik = korisnik.idKorisnik
                      JOIN mesto ON mesto.idMesto = cuvanje.idMesto WHERE idCuvanje=".$_GET['id'];
	$result = mysqli_query($con, $sql0);
	$pow = mysqli_fetch_row($result);
	
	if (mysqli_num_rows($result) === 1) {
   						//echo 'true';
   							$customer = $pow[0];
							$city = $pow[1];
							$tiersFull = $pow[2];
							$dot = $pow[3];
							$tire_depth = $pow[4];
							$rims = $pow[5];
							$season = $pow[6];
							$quantity = $pow[7];
							$place = $pow[8];
							$dateInput = $pow[9];
							$precnik1 = $pow[10];
							$dateCurrent = date('d-m-Y');
							
							$dan = substr("$dateInput",0,2);
							$mesec = substr("$dateInput",3,2);
							$god = substr("$dateInput",-4);
							$dateInput1 = "$god-$mesec-$dan";

	
	$sql1 = "INSERT INTO evidencija (musterija, gumaCelo,precnik, dot, dubinaSare, sezona, felna, kolicina, mesto, datum, datumIzmene, datum1, tipIzmene) VALUES ('$customer - $city', '$tiersFull','R$precnik1','$dot','$tire_depth','$season',
	'$rims',$quantity,'$place','$dateInput','$dateCurrent','$dateInput1','OBRISANO')";
	if($con->query($sql1) === TRUE){
		echo "Good";
	}
	else{
		echo $con->error;
	}                     
	}
}
?>