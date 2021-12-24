<?php


require('config.php');
require 'auth.php';


if(isset($_GET['id']))
{	
	$id = $_GET['id'];
	
	 
	 $sql = "DELETE FROM cuvanje WHERE idCuvanje='$id'";
     if($con->query($sql) === TRUE){
	 echo 'Deleted successfully.';
	 }
	 $con->close();
}
// UPDATE mesto SET zauzeto = 0  WHERE idMesto = (SELECT idMesto FROM cuvanje WHERE idCuvanje=".$_GET['id']")
?>