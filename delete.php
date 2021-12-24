<?php
require 'config.php';
require 'auth.php';

	

	

if(isset($_GET['id']))
{		
	$sql0 = "SELECT idKorisnik, ime, mesto FROM korisnik WHERE idKorisnik=".$_GET['id'];
	$result = mysqli_query($con, $sql0);
	$pow = mysqli_fetch_row($result);
	
	if (mysqli_num_rows($result) === 1) {
   						//echo 'true';
							$id = $pow[0];
   							$name = $pow[1];
							$place = $pow[2];
                     }
	
	$sql1 = "INSERT INTO korisnikdel (idKorisnik, ime, mesto) VALUES ($id, '$name', '$place')";
	if($con->query($sql1) === TRUE){
		echo 'Deleted successfully.';
	}
	
	$sql2 = "DELETE FROM korisnik WHERE idKorisnik=".$_GET['id'];
	$result1 = mysqli_query($con, $sql2);
	
	if ($result1 == 0 || $result1 == FALSE) {
		die(header("HTTP/1.0 404 Not Found"));
	}
	
$con->close();
}


?>

