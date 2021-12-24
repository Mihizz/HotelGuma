<!DOCTYPE html>
<html>
   <head>
   <?php require '../auth.php';  
   
   if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user_id']);
  	header("location: login.php");}
  ?>
      <title>Pocetna stranica</title>
      <link href="../bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="../bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="../bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="../bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="../bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../bootstrap/dataTables.bootstrap.css">
	  
	  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico" />
	  <link rel="stylesheet" href="../font-awesome/css/all.css">
	  <link rel="stylesheet" href="../font-awesome/css/all.min.css">
	  
		<script defer src="../font-awesome/js/brands.js"></script>
		<script defer src="../font-awesome/js/solid.js"></script>
		<script defer src="../font-awesome/js/fontawesome.js"></script>
	  
	  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet" type="text/css">
      <style>
         img:hover {
         background-color: #888888; 
         }
         body{
         background: url(pozadine/background7.jpg);
         background-repeat: repeat-y;
         background-size: 1920px 937px;
		 overflow-x: hidden;
         }
		 
		 .fav{
			 font-size: 25px;
		 }
		 
		 strong {
			 font-size: 40px;
		 }
		 
		 .bigIcon {
			 padding: 20px;
		 }
		 
		 .bigIcon1 {
			 padding-right:40px;
			 padding-left:40px;
			 padding-top:20px;
			 padding-bottom:30px;
		 }
		 
		 .bigIcon2 {
			 padding-right:50px;
			 padding-left:50px;
		 }
		 
		 .bunge{
			 font-family: Righteous;
			 position: relative;
			margin: auto;
			height: 1em;
			color:red;
			  font-size: 100px;
			  font-weight: 600;
			  letter-spacing: -0.02em;
			  line-height: 1.03em;
		 }
		 
.btn1 {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

@media screen and (max-width: 765px) {
	.dissapear {
	display: none;
	}
}

.huver{
font-size: 20px;
float: right; 
margin-top: 20px; 
margin-right: 20px;
}

.huver:hover {
    background-color: red; 
	
}
      </style>
   </head>
   <body>
	
		<!-- logo -->
      <div class="logo">
         <a href="index.php"><img src="Logo.png" data-toggle="tooltip" style="padding: 10px;"  title="Povratak na pocetnu" alt="Logo.png"  width="270" height="135"></a>
		 <a class="btn btn-danger huver" href="./index.php?logout='1'"" role="button" style="font-size:50px;">Izloguj se</a>
	  </div>
      <br> <br>
		<!-- ispis -->
      <div class="centar" style="align-content:center;text-align:center">
         <!-- <div class="bunge">Hotel Guma Stepić</div>
         <div class="bunge">Hotel Guma Stepić</div>
		 <div class="bunge">Hotel Guma Stepić</div> -->
		 <div class="bunge">Hotel Guma Stepić</div>
         <br><br><br>
         <div class="container">
		<div class="row">
			<div class="col-sm-6">
			<button class="btn btn1" title="Korisnici" onclick="window.location.href='kupci.php'"><div class="fav"><i class="p-4 fad fa-users fa-10x"></i></div><p></p><p><strong>Korisnici</strong></p></button><br><br></div>
			<div class="col-sm-6 ">
			<button class="btn btn1" title="Hotel za gume" onclick="window.location.href='cuvanje.php'" style="padding-left:25px; padding-right:25px;"><div class="fav bigIcon1 bigIcon2"><i class="p-4 fad fa-tire fa-8x"></i></div><p></p><p><strong>Hotel Guma</strong></p></button><br><br></div>
        </div>
		<div class="row">    
			<div class="col-sm-6">
			<button class="btn btn1" title="Slobodna mesta u hotelu" onclick="window.location.href='slobodnaMesta.php'"><div class="fav"><i class="m-4 p-4 fad fa-inventory fa-10x"></i></div><p></p><p><strong>Slobodna mesta</strong></p></button><br><br></div>
			<div class="col-sm-6 ">
			<button  class="btn btn1" title="2D prikaz hotela i mesta" onclick="window.location.href='skica.php'"><div class="fav bigIcon1"><i class="p-4 fas fa-store fa-8x"></i></div><p></p><p><strong>2D prikaz</strong></p></button><br><br></div>
		</div>
		<div class="row">	
			<div class="col-sm-6">
			<button class="btn btn1" title="Statistika za kupce i gume" onclick="window.location.href='statistika.php'" style="padding-left:20px; padding-right:20px;"><div class="fav bigIcon"><i class="p-4 fas fa-chart-pie fa-10x"></i></div><p></p><p><strong>Statistika</strong></p></button><br><br></div>
			<div class="col-sm-6">
			<button class="btn btn1" title="Evidencija baze podataka" onclick="window.location.href='evidencija.php'" style="padding-left:30px;"><div class="fav bigIcon"><i class="p-4 fas fa-books fa-10x"></i></div><p></p><p><strong>Evidencija</strong></p></button></div>
		 </div></div>
      </div>
   </body>
</html>