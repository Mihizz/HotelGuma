<!DOCTYPE html>
<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

header('Location: mobile/login.php');
?>

<html>
   <head>
   <?php require 'auth.php';  
   
   if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user_id']);
  	header("location: login.php");}
  ?>
      <title>Pocetna stranica | Hotel Stepic</title>
      <link href="bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap.css">
	  
	  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico" />
	  <link rel="stylesheet" href="font-awesome/css/all.css">
	  <link rel="stylesheet" href="font-awesome/css/all.min.css">
	  
		<script defer src="font-awesome/js/brands.js"></script>
		<script defer src="font-awesome/js/solid.js"></script>
		<script defer src="/font-awesome/js/fontawesome.js"></script>
	  
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
		 
		 .bunge{
			 font-family: Righteous;
			 position: relative;
			margin: auto;
			height: 1em;
			color:red;
			  font-size: 5vw;
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
         <a href="index.php"><img src="Logo.png" data-toggle="tooltip" style="padding: 10px;"  title="Povratak na pocetnu" alt="Logo.png"  width="190" height="85"></a>
		 <a class="btn btn-danger huver" href="./index.php?logout='1'"" role="button">Izloguj se</a>
	  </div>
      <br> <br>
		<!-- ispis -->
      <div class="centar" style="align-content:center;text-align:center">
		<div class="deconstructed">
         <!-- <div class="bunge">Hotel Guma Stepić</div>
         <div class="bunge">Hotel Guma Stepić</div>
		 <div class="bunge">Hotel Guma Stepić</div> -->
		 <div class="bunge">Hotel Guma Stepić</div>
		</div>
         <br><br><br>
         <div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
			<button class="btn btn1" title="Korisnici" onclick="window.location.href='kupci.php'"><i class="p-4 fad fa-users fa-8x"></i><p></p><p><strong>Korisnici</strong></p></button><br><br></div>
			<div class="col-sm-12 col-md-4">
			<button class="btn btn1" title="Hotel za gume" onclick="window.location.href='cuvanje.php'" style="padding-left:25px; padding-right:25px;"><i class="p-4 fad fa-tire fa-8x"></i><p></p><p><strong>Hotel Guma</strong></p></button><br><br></div>
            <div class="col-sm-12 col-md-4">
			<button class="btn btn1" title="Slobodna mesta u hotelu" onclick="window.location.href='slobodnaMesta.php'"><i class="m-4 p-4 fad fa-inventory fa-8x"></i><p></p><p><strong>Slobodna mesta</strong></p></button><br><br></div>
		<div class="dissapear">
			<br><br>
		</div>
			<div class="col-sm-12 col-md-4">
			<button  class="btn btn1" title="2D prikaz hotela i mesta" onclick="window.location.href='skica.php'"><i class="p-4 fas fa-store fa-8x"></i><p></p><p><strong>2D prikaz</strong></p></button><br><br></div>
			<div class="col-sm-12 col-md-4">
			<button class="btn btn1" title="Statistika za kupce i gume" onclick="window.location.href='statistika.php'" style="padding-left:20px; padding-right:20px;"><i class="p-4 fas fa-chart-pie fa-8x"></i><p></p><p><strong>Statistika</strong></p></button><br><br></div>
			<div class="col-sm-12 col-md-4">
			<button class="btn btn1" title="Evidencija baze podataka" onclick="window.location.href='evidencija.php'" style="padding-left:30px;"><i class="p-4 fas fa-books fa-8x"></i><p></p><p><strong>Evidencija</strong></p></button></div>
		 </div></div>
      </div>
   </body>
</html>