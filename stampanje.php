<?php
//Include the necessary library for Ubuntu
    //include('phpqrcode/qrlib.php'); QR CODE

require 'config.php';
require 'auth.php'; 
   

   
               if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
               $url = "https://";   
            else  
               $url = "http://";   
         $url.= $_SERVER['HTTP_HOST']; 
         $url.= $_SERVER['REQUEST_URI'];    
   
         $url_components = parse_url($url);
         parse_str($url_components['query'], $params); 
   
   
   $quer ="SELECT * FROM hotel WHERE idCuvanje='{$params['id']}'";
                        $result = mysqli_query($con, $quer);
                        $pow = mysqli_fetch_row($result);
                        
                     if (mysqli_num_rows($result) === 1) {
                     //echo 'true';
                        $idSave = $pow[0];
                        $idCustomer = $pow[1];
                        $idPlaceC = $pow[2];
                        $row = $pow[3];
                        $column = $pow[4];
                        $flor = $pow[5];
                        $width = $pow[6];
                        $profil = $pow[7];
                        $precn = $pow[8];
                        $doot = $pow[9];
                        $dubinaa = $pow[10];
                        $season = $pow[11];
                        $rimms = $pow[12];
                        $ammount = $pow[13];
                        $celoC = $pow[14];
                        $dates = $pow[15];
                     }
                     $celaGuma = $width." / ".$profil."  R".$precn;
   ?>

   <?php

                     $sql = "SELECT ime,mesto FROM korisnik WHERE idKorisnik = $idCustomer;";   
                     $result = mysqli_query($con, $sql);
                     $pow = mysqli_fetch_row($result);
                     if (mysqli_num_rows($result) === 1) {
                        $celoIme = $pow[0]. " / " .$pow[1];
                        $celoIme1 = $pow[0]. " - " .$pow[1];
                     }
	/*
   //       "Marko-Starcevo \n 255/65 R15 || 4 kom || zimske || metalna || A1/3 || 12.05.2019"
   $text = $celoIme1."\n".$celaGuma."\n" .$ammount." komada\n".$doot."\n".$season."\n".$rimms."\n".$celoC."\n".$dates;


    //check the class is exist or not
    if(class_exists('QRcode'))
    {
        //Generate QR
        QRcode::png($text, 'QRImage.png');
    }else{
        //Print error message
        echo 'class is not loaded properly';
    }
    
              */     ?>

<script >
   function stampaj(){
      window.print();
   }
</script>
<html>
   <head>
      <link href="bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap.css">
      <title>Stampanje | Hotel Stepic</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
	  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <style>
         img:hover {
         background-color: #888888; 
         }
         body{
         background: url(pozadine/background7.jpg);
         background-repeat: no-repeat;
         background-size: 1920px 937px;
         }
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0;
         }
         /* Firefox */
         input[type=number] {
         -moz-appearance: textfield;
         }
		 .logo {
         float: left;
         }
		 .btn {
         display: inline-block;
         padding: 6px 12px !important;
         margin-bottom: 0;
         font-size: 14px;
         font-weight: 400;
         line-height: 1.42857143;
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         -ms-touch-action: manipulation;
         touch-action: manipulation;
         cursor: pointer;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         background-image: none;
         border: 1px solid transparent;
         border-radius: 4px;
         }
         .btn-primary {
         color: #fff !important;
         background: #F3667D !important;
         border-color: #F3667D !important;
         box-shadow:none !important;
         }

         .slicica {
            width: 80px;
            height: 80px;
         }

         .qrKod {
            width: 180px;
            height: 180px;
         }

         label {
            font-size: 25px;
         }

         .cont {
            position: relative;
            text-align: center;
         }


         .naziv {
            position: absolute;
            top: 75px;
            left: 65px;
         }

         .gume {
         position: absolute;
         top: 130px;
         left: 120px;
         }

         .komada {
         position: absolute;
          top: 42.5%;
          left: 20%;
          transform: translate(-50%, -50%);
         }

         .sezona {
         position: absolute;
         top: 34.5%;
         left: 30%;
         }

         .felne {
         position: absolute;
         top: 34.5%;
         left: 45%;
         }
         .kod {
         position: absolute;
         top: 12%;
         right: 10%;
         }
		 .dot{
			position: absolute;
            top: 65px;
            left: 565px; 
		 }
		 .datum{
			position: absolute;
            top: 125px;
            left: 580px;
		 }
      .dubina{
         position: absolute;
            top: 210px;
            left: 500px; 
       }

		 .mesto{
			position: absolute;
            top: 210px;
            left: 625px; 
		 }
         .dugme{
            background-color: green;
            color: black;
            font-size: 50px;
         }

         @media print {
            a {
               display: none;
            }
            .ar {
               display: none;
            }
         #slika {
            display: none;
         }
            .dugme{
            display: none;
            }
         }


         }
      </style>
   </head>
   <body>
      <div class="logo">
         <a href="index.php" 
            ><img src="Logo.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="190" height="85"></a>
      </div>

      <a class="ar" href="cuvanje.php">
      <button type="button" class="btn btn-primary btn-lg" title="Vrati se nazada na hotel" style="float: right; margin-right:20px;margin-top:20px;">Vrati se na HOTEL</button></a>
     

      <div class="container">
         <div class="cont">
         <div style="margin-top: 10%" id=slika></div><br><br>
         <img style="width: 700px; height: 475px;" src="stampanjeSlika.jpg">

         <div class="naziv"><label style="font-size: 20px;"> <?php echo $celoIme ?></label> </div>
         <div class="gume"><label style="font-size: 35px;"> <?php echo $celaGuma ?></label> </div>
         <div class="komada"><label style="font-size: 40px;"><?php echo $ammount ?></label> </div>
         <div class="sezona"><img class="slicica" src= "<?php if ($season == 'letnje'){ echo 'sun.png';} else{echo 'snowflake.png';} ?>"></div>
         <div class="felne"><img class="slicica" src= "<?php 
         if ($rimms == 'nema_felnu'){ echo 'exx.png';} 
         elseif($rimms == 'metalne_bez_ratkapna'){echo 'metalna1.png';}
         elseif($rimms == 'metalne_sa_ratkapnama'){echo 'ratkapna.png';} 
         else {echo 'alumini.png';} ?>"> </div>
		 <div class="dot"><label style="<?php
		 if (strlen($doot)>10)
			 echo "font-size: 15px;";
		 else{
			 echo "font-size: 20px;";
		 }
			 ?>"> 
		 <?php echo $doot ?></label> </div>
       <div class="dubina"><label style="font-size: 30px;"> <?php echo $dubinaa ?> mm</label> </div>
		 <div class="datum"><label style="font-size: 25px;"> <?php echo $dates ?></label> </div>
		 <div class="mesto"><label style="font-size: 30px;"> <?php echo $celoC ?></label> </div>
         <!-- <div class="kod"><img class="qrKod" src="QRImage.png"></div> KOD -->
		 <br><br> <!-- font-size: 20px; -->
         <button type="button" class=" btn btn btn-success btn-lg dugme" onclick="stampaj()">STAMPAJ</button>
      </div>
   </body>
</html>