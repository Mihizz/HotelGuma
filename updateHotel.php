<?php
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
                        $season1 = $pow[11];
                        $rimms = $pow[12];
                        $ammount = $pow[13];
                        $celoC = $pow[14];
                        $dates = $pow[15];
                     }

                     $dates1 = strtotime($dates);
                     $dates11 = date('Y-m-d',$dates1);
   ?>
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
      <title>Promeni gume | Hotel Stepic</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
     <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <style>
         img:hover {
         background-color: #888888; 
         }
         body{
         background: url(pozadine/background7.jpg);
         background-repeat: repeat-y;
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
      </style>
      <script>
         
         var stariDatum;
         function datumDisable(){
            stariDatum = document.getElementById("datum").getAttribute('value');
            
         
            if(document.getElementById('istiDatum').checked) {
            document.getElementById("datum").readOnly = true;
            document.getElementById("datum").value = stariDatum;
         }
            else{
            document.getElementById("datum").readOnly = false;
            }
         }       
      </script>
   </head>
   <body>
      <div class="logo">
         <a href="index.php" 
            ><img src="Logo.png" style="padding: 10px;" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="190" height="85"></a>
      </div>
     <a href="cuvanje.php"
      <button type="button" class="btn btn-primary btn-lg" title="Vrati se nazada na hotel" style="color:#9192B7;float: right; margin-right:20px;margin-top:20px;">Vrati se na HOTEL</button></a>
     
      <br><br><br><br>
      <div class="container">
         <?php
            if (isset($_REQUEST['submit'])){
            
            
            $idUser = mysqli_real_escape_string($con, stripslashes($_REQUEST['idUser']));
                        $TireWidth = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireWidth']));
                        $TireRadio = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireRadio']));
                        $dotz = mysqli_real_escape_string($con, stripslashes($_REQUEST['dotz']));
                        $tire_depth  = mysqli_real_escape_string($con, stripslashes($_REQUEST['tire_depth']));
                        $TireDimension = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireDimension']));
                        $season = mysqli_real_escape_string($con, stripslashes($_REQUEST['season']));
                     $rims = mysqli_real_escape_string($con, stripslashes($_REQUEST['rims']));
                        $quantity = mysqli_real_escape_string($con, stripslashes($_REQUEST['quantity']));
                        $date1 = mysqli_real_escape_string($con, stripslashes($_REQUEST['datum']));
                  $date11 = strtotime($date1);
                     $date2 = date('d-m-Y',$date11);
                  $date3 = date('Y-m-d',$date11);
                  $date4 = date('Y-m-d');
                           
                        
                        
                        //greske
                        $gSirina = "";
                        $gProfil = "";
                        $gDimenzija = "";
                        $gDot = "";
                        $gDubinaSare = "";
                        $gKolicina = "";
                        $gZauzeto = "";
                        $gMesto = "";
                        $gDatum = "";
                        $daljeIde = 1;
                        
                        //za dobijanje idMesta
                        $RowPlace = mysqli_real_escape_string($con, stripslashes($_REQUEST['RowPlace']));
                        $ColumnPlace = mysqli_real_escape_string($con, stripslashes($_REQUEST['ColumnPlace']));
                        $FloorPlace = mysqli_real_escape_string($con, stripslashes($_REQUEST['FloorPlace']));
                        
                        $quer2 ="SELECT idMesto, zauzeto FROM mesto WHERE red = '$RowPlace' AND kolona = '$ColumnPlace' AND sprat = '$FloorPlace'";
                        $result2 = mysqli_query($con, $quer2);
                        $pow = mysqli_fetch_row($result2);
                        
                        $idPlace = $pow[0];
                        $isTaken = $pow[1];
                        
                        
                        ////////////////////// GRESKE ////////////////////
                        
                        //mesto
                        if(empty($idPlace)){
                           $gMesto = "- Morate uneti mesto u hotelu";
                           $daljeIde = 0;
                        }
                        
                        //Sirina
                        if(!preg_match("/^[0-9]{3}$/", $TireWidth)){
                           $gSirina = "- Sirina mora biti trocifreni broj<br>";
                           $daljeIde = 0;
                        }
                        //Profil
                        if(!preg_match("/^[0-9]{2}$/", $TireRadio)){
                           $gProfil ="- Profil mora biti dvocifren broj<br>";
                           $daljeIde = 0;
                        }
                        //Precnik
                        if(!preg_match("/^[0-9]{2}$/", $TireDimension)){
                           $gDimenzija = "- Precnik mora biti dvocifren broj<br>";
                           $daljeIde = 0;
                        }
                        //DOT
                        if(preg_match("/^[0-9]{4}$/", $dotz)){
                                 
                              }
                           else if(preg_match("/^\(?([0-9]{4})\)?[-]?([0-9]{4})$/", $dotz)){
                              
                           }
                           else if(preg_match("/^\(?([0-9]{4})\)?[-]?([0-9]{4})[-]?([0-9]{4})$/", $dotz)){
                              
                           }
                           else if(preg_match("/^\(?([0-9]{4})\)?[-]?([0-9]{4})[-]?([0-9]{4})[-]?([0-9]{4})$/", $dotz)){

                           }
                           else {
                              $gDot ="- DOT mora biti godina (4 cifre) ili vise godina razvojeni znakom \"-\"<br>";
                                 $daljeIde = 0;
                           }

                               //Dubina Sare
            if (!preg_match("/^[1-9]{1}$/", $tire_depth)) {
               $gDubinaSare= "- Dubina sare mora biti jedan broj<br>";
               $daljeIde = 0;
            }
               

                        //Kolicina
                        if(!preg_match("/^[1-9]{1}$/", $quantity)){
                           $gKolicina = "- Kolicina mora biti jedan broj<br>";
                           $daljeIde = 0;
                        }

                        //Datum
                        /*z = <script> document.writeln(neMenjajDatum); </script>;
                        echo z;
                        if (z == 0){
                           if ($date1 == ""){
                              $gDatum = "- Unesite datum<br>";
                              $daljeIde = 0;
                           }}
                        else {
                           $date2 = $dates; 
                        }*/
                        //ako je mesto zauzeto
                        
                        if($idPlace === $idPlaceC){
                           //Mesto koje je do sada bilo
                        }
                        else if($isTaken + $quantity > 4){
                                 $gZauzeto = "-  Nema dovoljno mesta (pronadji slobodno mesto <a href='slobodnaMesta.php'>ovde</a>)";
                                 $daljeIde = 0;
                              }
                              
                              else if ($isTaken != 0 && $isTaken != 1 && $isTaken != 2 && $isTaken != 3 && $isTaken != 4){
                                 $gZauzeto = "- Mesto u hotelu ne postoji";
                                 $daljeIde = 0;
                              }
                        
                        ////////////////////////////////
                        if($daljeIde == 1){
                        
                        $dateCurrent = date('d-m-Y');
                        ////
                           $dan = substr("$dates",0,2);
                           $mesec = substr("$dates",3,2);
                           $god = substr("$dates",-4);
                           $dateInput1 = "$god-$mesec-$dan";
                        /////
                        ////
                           $dan = substr("$date2",0,2);
                           $mesec = substr("$date2",3,2);
                           $god = substr("$date2",-4);
                           $dateInput2 = "$god-$mesec-$dan";
                        /////
                        
                        $sqlQ = "SELECT ime, mesto FROM korisnik WHERE idKorisnik = '$idCustomer'";
                        $resultQ = mysqli_query($con, $sqlQ);
                        $rowQ = mysqli_fetch_row($resultQ);
                        $nameX = $rowQ[0];
                        $cityX = $rowQ[1];
                        
                        $sqlW = "SELECT ime, mesto FROM korisnik WHERE idKorisnik = '$idUser'";
                        $resultW = mysqli_query($con, $sqlW);
                        $rowW = mysqli_fetch_row($resultW);
                        $nameY = $rowW[0];
                        $cityY = $rowW[1];
                        
                        //STARO
                        $sql1 = "INSERT INTO evidencija (musterija, gumaCelo,precnik, dot, dubinaSare, sezona, felna, kolicina, mesto, datum, datumIzmene,datum1, tipIzmene) VALUES ('$nameX - $cityX', '$width/$profil R$precn','R$precn','$doot','$dubinaa','$season1',
                        '$rimms',$ammount,'$row$column/$flor','$dates','$dateCurrent','$dateInput1','IZMENA STARO')";
                        if($con->query($sql1) === TRUE){
                        }
                        else
                           echo "<h1>BAD</h1>";
                        
                        //NOVO
                        $sql1 = "INSERT INTO evidencija (musterija, gumaCelo,precnik, dot, dubinaSare, sezona, felna, kolicina, mesto, datum, datumIzmene,datum1, tipIzmene) VALUES ('$nameY - $cityY', '$TireWidth/$TireRadio R$TireDimension','R$TireDimension',
                        '$dotz',$tire_depth, '$season','$rims',$quantity,'$RowPlace$ColumnPlace/$FloorPlace','$date2','$dateCurrent','$dateInput2','IZMENA NOVO')";
                        if($con->query($sql1) === TRUE){
                        }
                        else
                           echo "<h1>BAD</h1>";
                        
                        //datum           
                        $query = "UPDATE cuvanje SET idKorisnik='$idUser', idMesto='$idPlace', sirina='$TireWidth', 
                        profil='$TireRadio', precnik='$TireDimension',gumeCelo='$TireWidth/$TireRadio R$TireDimension', dot='$dotz', dubinaSare='$tire_depth', sezona='$season',felna='$rims', kolicina='$quantity',datum='$date2' WHERE idCuvanje='{$params['id']}'";
                        $result = mysqli_query($con, $query);
                        
                        if($result){
                           echo "<div class='alert alert-success'>
                           <h3>Uspesno ste se dodali u hotel.</h3>
                           Kliknite ovde da vidite sve gume u hotelu: <a href='cuvanje.php'>Hotel guma</a>
                           </div>";
                           
                     //oslobodi mesto
                           $sql = "UPDATE mesto SET zauzeto = zauzeto - $ammount WHERE idMesto = '$idPlaceC'";
                           if($con->query($sql) === TRUE){
                           echo '';}
            
                        //rezervise mesto
                        $query12 ="SELECT mestoCelo FROM mesto WHERE red = '$RowPlace' AND kolona = '$ColumnPlace' AND sprat = '$FloorPlace'";
                        $result12 = mysqli_query($con, $query12);
                        $celo12 = mysqli_fetch_row($result12);
                        $celo112 = $celo12[0];
                        
                        $query3 ="UPDATE mesto SET zauzeto= zauzeto + $quantity WHERE mestoCelo='$celo112'";
                        $result3 = mysqli_query($con, $query3);
                           
                        } else {
                           echo "<div class='alert alert-danger'>
                           <h3>Neuspesno</h3>
                           konektujte se sa bazom
                        </div>";
                        }
                        }
                        else {
                           echo "<div class='alert alert-danger'>
                           <h3 style=\"text-decoration: underline;\">Neuspesno</h3><strong>
                           " .$gSirina. "" .$gProfil. "" .$gDimenzija. "" .$gKolicina. "" .$gDot. "" .$gDubinaSare. "" .$gDatum. "" .$gZauzeto. "" .$gMesto. "
                           </strong>
                        </div>
                     
                     <script type=\"text/JavaScript\">
                           setTimeout(() => {
                              if((0$idUser) != -1){document.getElementById(\"idUser\").value = $idUser;}
                              if(0$TireWidth != 0){document.getElementById(\"TireWidth\").value = ($TireWidth + 0);}
                              if(0$TireRadio != 0){document.getElementById(\"TireRadio\").value = ($TireRadio + 0);}
                              if(0$TireDimension != 0){document.getElementById(\"TireDimension\").value = ($TireDimension + 0);}
                              if(0$quantity != 0){document.getElementById(\"quantity\").value = ($quantity + 0);}
                              if(\"$dotz\" != \"\"){document.getElementById(\"dotz\").value = (\"$dotz\" + \"\");}
                              if(0$tire_depth != 0){document.getElementById(\"tire_depth\").value = ($tire_depth + 0);}

                              
                              if(\"$RowPlace\" != \"\"){document.getElementById(\"RowPlace\").value = \"$RowPlace\";}
                              if(0$ColumnPlace != 0){document.getElementById(\"ColumnPlace\").value = ($ColumnPlace + 0);}
                              if(0$FloorPlace != 0){document.getElementById(\"FloorPlace\").value = ($FloorPlace + 0);}

                              if(\"$season\" == \"zimske\"){
                                 document.getElementById(\"zimske\").checked = true;
                              }
                              
                              if(\"$rims\" == \"metalne_bez_ratkapna\"){
                                 document.getElementById(\"metalne_bez_ratkapna\").checked = true;
                              }
                              else if(\"$rims\" == \"metalne_sa_ratkapnama\"){
                                 document.getElementById(\"metalne_sa_ratkapnama\").checked = true;
                              }
                              else if(\"$rims\" == \"aluminijumske\"){
                                 document.getElementById(\"aluminijumske\").checked = true;
                              }
                              if(\"$date3\" != \"1970-01-01\"){
                              document.getElementById(\"datum\").value = \"$date3\";}
                              else{
                              
                              document.getElementById(\"datum\").value = \"$date4\";}
                              
                           }, 10);
                              </script>";
                        }
            }
                        
                        
                   
                  ?>
         <?php
            $test = "";
            if (isset($_REQUEST['provera'])){
            
            $RowPlace = mysqli_real_escape_string($con, stripslashes($_REQUEST['RowPlace']));
            $ColumnPlace = mysqli_real_escape_string($con, stripslashes($_REQUEST['ColumnPlace']));
            $FloorPlace = mysqli_real_escape_string($con, stripslashes($_REQUEST['FloorPlace']));
         $idUser = mysqli_real_escape_string($con, stripslashes($_REQUEST['idUser']));
                        $TireWidth = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireWidth']));
                        $TireRadio = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireRadio']));
                        $dotz = mysqli_real_escape_string($con, stripslashes($_REQUEST['dotz']));
                        $tire_depth  = mysqli_real_escape_string($con, stripslashes($_REQUEST['tire_depth']));
                        $TireDimension = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireDimension']));
                        $season = mysqli_real_escape_string($con, stripslashes($_REQUEST['season']));
                     $rims = mysqli_real_escape_string($con, stripslashes($_REQUEST['rims']));
                        $quantity = mysqli_real_escape_string($con, stripslashes($_REQUEST['quantity']));
                        $date1 = mysqli_real_escape_string($con, stripslashes($_REQUEST['datum']));
                  $date11 = strtotime($date1);
                     $date2 = date('d-m-Y',$date11);
                  $date3 = date('Y-m-d',$date11);
                  $date4 = date('Y-m-d');
            
            $quer1 ="SELECT zauzeto FROM mesto WHERE red = '$RowPlace' AND kolona = '$ColumnPlace' AND sprat = '$FloorPlace'";
            $result1 = mysqli_query($con, $quer1);
            $slobodno = mysqli_fetch_row($result1);
            $slobodno1 = $slobodno[0];
         $slobodno2 = 4 - $slobodno1;
         
            
            $quer2 ="SELECT mestoCelo FROM mesto WHERE red = '$RowPlace' AND kolona = '$ColumnPlace' AND sprat = '$FloorPlace'";
            $result2 = mysqli_query($con, $quer2);
            $celo = mysqli_fetch_row($result2);
            $celo1 = $celo[0];
            
            
            if (mysqli_num_rows($result1) > 0) {
               
            if($celoC == $celo1){
               $test = 'Mesto '. $celo1 . ' je trenutno mesto ';
            }
            
            else if($slobodno1 == 4){
               $test = '<div style="color:red;">Mesto '. $celo1 . ' je zauzeto, pronadji slobodno mesto <a href="slobodnaMesta.php">ovde</a></div>';
            }
            else if ($slobodno1 < 4 && $slobodno1>0){
            $test = '<div style="color:blue;">Na mesto '. $celo1 . ' mogu da stanu još  <span style="color:red;font-size:20px">'. $slobodno2 . ' </span> gume</div>';
            }
         else if ($slobodno1 == 0){
            $test = '<div style="color:blue;">Mesto '. $celo1 . ' je slobodno</div>';
            }
            else {
               $test = 'Doslo je do greske!!!';
            }
            }
            else {
               $test = 'Ne postoji to mesto u hotelu!!!';
            }
         echo "<script type=\"text/JavaScript\">
                           setTimeout(() => {
                              document.getElementById(\"idUser\").value = \"$idUser\";
                              if(0$TireWidth != 0){document.getElementById(\"TireWidth\").value = ($TireWidth + 0);}
                              if(0$TireRadio != 0){document.getElementById(\"TireRadio\").value = ($TireRadio + 0);}
                              if(0$TireDimension != 0){document.getElementById(\"TireDimension\").value = ($TireDimension + 0);}
                              if(0$quantity != 0){document.getElementById(\"quantity\").value = ($quantity + 0);}
                              if(\"$dotz\" != \"\"){document.getElementById(\"dotz\").value = (\"$dotz\" + \"\");}
                              if(0$tire_depth != 0){document.getElementById(\"tire_depth\").value = ($tire_depth + 0);}
                              
                              if(\"$RowPlace\" != \"\"){document.getElementById(\"RowPlace\").value = \"$RowPlace\";}
                              if(0$ColumnPlace != 0){document.getElementById(\"ColumnPlace\").value = ($ColumnPlace + 0);}
                              if(0$FloorPlace != 0){document.getElementById(\"FloorPlace\").value = ($FloorPlace + 0);}

                              if(\"$season\" == \"zimske\"){
                                 document.getElementById(\"zimske\").checked = true;
                              }
                              
                              if(\"$rims\" == \"metalne_bez_ratkapna\"){
                                 document.getElementById(\"metalne_bez_ratkapna\").checked = true;
                              }
                              else if(\"$rims\" == \"metalne_sa_ratkapnama\"){
                                 document.getElementById(\"metalne_sa_ratkapnama\").checked = true;
                              }
                              else if(\"$rims\" == \"aluminijumske\"){
                                 document.getElementById(\"aluminijumske\").checked = true;
                              }
                              if(\"$date3\" != \"1970-01-01\"){
                              document.getElementById(\"datum\").value = \"$date3\";}
                              else{
                              
                              document.getElementById(\"datum\").value = \"$date4\";}
                              
                           }, 10);
                              </script>";
            }
                     ?>
         <h2 style="font-family:Bungee; align-content:center;">Unos u Hotel Guma</h2>
         <br>
         <form method="post">
            <div class="row">
               <div class="form-group">
                  <label for="idUser">Musterija</label>
                  <select id="idUser" name="idUser" class="form-control">
                  <?php
                     $sql = "SELECT * FROM korisnik WHERE 1 ORDER BY ime ASC;";   
                     $result = mysqli_query($con, $sql);
                     if (mysqli_num_rows($result) > 0) {
                     while($roww = mysqli_fetch_assoc($result)) {
                     echo "
                     <option value=\"". $roww['idKorisnik']. "\"";
                     if($idCustomer === $roww['idKorisnik']){echo "selected";}
                     
                     echo  ">". $roww['ime']. " - ". $roww['mesto']. "</option>";
                     }
                     }  
                     ?>
                  </select>
               </div>
               <br>
            </div>
            <div class="form-group row">
               <div class="col-xs-3">
                  <center><label style="font-size: 130%;text-decoration: none;
                     border-bottom: 4px solid red;">Podatci o gumama</label></center>
               </div>
               <div class="col-xs-2">
                  <label></label> 
               </div>
               <div class="col-xs-3">
                  <center><label style="font-size: 130%;text-decoration: none;
                     border-bottom: 4px solid red;">Podatci o mestu</label></center>
               </div>
            </div>
            <div class="form-group row">
               <label for="TireWidth" class="col-sm-1 col-form-label" >Sirina</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="TireWidth" name="TireWidth" type="number" placeholder="-- <?php echo $width; ?> --" value="<?php echo $width; ?>" autocomplete="off">
               </div>
               <div class="col-xs-2"></div>
               <label for="RowPlace" class="col-sm-1 col-form-label" >Red</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="RowPlace" name="RowPlace" type="text" placeholder="-- <?php echo $row; ?> --" value="<?php echo $row; ?>" autocomplete="off">
               </div>
            </div>
            <div class="form-group row">
               <label for="TireRadio" class="col-sm-1 col-form-label" >Profil</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="TireRadio" name="TireRadio" type="number" placeholder="-- <?php echo $profil; ?> --" value="<?php echo $profil; ?>" autocomplete="off">
               </div>
               <div class="col-xs-2"></div>
               <label for="ColumnPlace" class="col-sm-1 col-form-label" >Kolona</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="ColumnPlace" name="ColumnPlace" type="number" placeholder="-- <?php echo $column; ?> --" value="<?php echo $column; ?>" autocomplete="off">
               </div>
            </div>
            <div class="form-group row">
               <label for="TireDimension" class="col-sm-1 col-form-label" >Precnik</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="TireDimension" name="TireDimension" type="number" placeholder="-- <?php echo $precn; ?> --" value="<?php echo $precn; ?>" autocomplete="off">
               </div>
               <div class="col-xs-2"></div>
               <label for="FloorPlace" class="col-sm-1 col-form-label" >Sprat</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="FloorPlace" name="FloorPlace" type="number" placeholder="-- <?php echo $flor; ?> --" value="<?php echo $flor; ?>" autocomplete="off">
               </div>
            </div>
            <div class="form-group row">
               <label for="quantity" class="col-sm-1 col-form-label" >Kolicina</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="quantity" name="quantity" type="number" placeholder="-- <?php echo $ammount; ?> --" value="<?php echo $ammount; ?>" autocomplete="off">
               </div>
               <div class="col-xs-3"></div>
               <div class="col-xs-3">
                  <button type="submit" name="provera" class="btn btn-warning">Proveri da li je slobodno</button>
               </div>
            </div>
            <div class="form-group row">
               <label for="dotz" class="col-sm-1 col-form-label" >DOT</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="dotz" name="dotz" type="text" placeholder="-- <?php echo $doot; ?> --" value="<?php echo $doot; ?>" autocomplete="off">
               </div>
               <div class="col-xs-3"></div>
               <div class="col-xs-4">
                  <strong>
                  <div  id="demo" style="font-size: medium;">
                     <?php echo $test; ?>
                  </div>
                  </strong>
               </div>
            </div>
            <div class="form-group row">
               <label for="quantity" class="col-sm-1 col-form-label" >Dubina sare</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="tire_depth" name="tire_depth" type="number" placeholder="-- <?php echo $dubinaa; ?> --" value="<?php echo $dubinaa; ?>" autocomplete="off">
               </div>
            </div>
            <div class="form-group row">
               <label for="idPrecnik" class="col-sm-1 col-form-label" >Sezona:</label> 
               <div class="col-xs-2">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="season" id="letnje" value="letnje" <?php if($season1 === 'letnje'){ echo "checked";} ?> >
                     <label class="form-check-label" for="letnje">
                     letnje
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="season" id="zimske" value="zimske" <?php if($season1 === 'zimske'){ echo "checked";} ?>>
                     <label class="form-check-label" for="zimske">
                     zimske
                     </label>
                  </div>
               </div>
            </div>
         <div class="form-group row">
         <label for="idPrecnik" class="col-sm-1 col-form-label" >Felne:</label> 
               <div class="col-xs-3">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="rims" id="nema_felnu" value="nema_felnu" <?php if($rimms === 'nema_felnu'){ echo "checked";} ?>>
                     <label class="form-check-label" for="nema_felnu">
                      Bez felne
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="rims" id="metalne_bez_ratkapna" value="metalne_bez_ratkapna" <?php if($rimms === 'metalne_bez_ratkapna'){ echo "checked";} ?>>
                     <label class="form-check-label" for="metalne_bez_ratkapna">
                      Metalne bez ratkapna
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="rims" id="metalne_sa_ratkapnama" value="metalne_sa_ratkapnama" <?php if($rimms === 'metalne_sa_ratkapnama'){ echo "checked";} ?>>
                     <label class="form-check-label" for="metalne_sa_ratkapnama">
                      Metalne sa ratkapnama
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="rims" id="aluminijumske" value="aluminijumske" <?php if($rimms === 'aluminijumske'){ echo "checked";}?>>
                     <label class="form-check-label" for="aluminijumske">
                     Aluminijumske
                     </label>
                  </div>
               </div>
               <div class="col-xs-2"></div>
               <div class="col-xs-3"><strong>
                  <label for="datum" class="col-xl-3 col-form-label" >Datum:</label><br>
                  <input type="date" id="datum" name="datum" value="<?php echo $dates11; ?>"><br>
                  <input type="checkbox" onclick="datumDisable()" name="istiDatum" id="istiDatum">
                  <label for="istiDatum">Ne zelim da promenim datum</label> 
               </strong></div>
            </div>
            <br>
            <div style="text-align: center;"><button type="submit" name="submit" class="btn btn-success" style="font-size: large;">Unesi u bazu</button></div>
         </form>
      </div>
   </body>
</html>