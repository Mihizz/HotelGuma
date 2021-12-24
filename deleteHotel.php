<?php


require('config.php');
require 'auth.php';

if(isset($_GET['id']))
{	
$id = $_GET['id'];

	$sql = "UPDATE mesto SET zauzeto = zauzeto - (SELECT kolicina FROM cuvanje WHERE idCuvanje='$id')  WHERE idMesto = (SELECT idMesto FROM cuvanje WHERE idCuvanje='$id')";
     $result1 = mysqli_query($con, $sql);
}
?>