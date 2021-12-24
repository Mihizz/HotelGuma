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
		 

	$redX = $params['red'];
	$kolonaX = $params['kolona'];
	$spratX = $params['sprat'];
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
      <title>Dodaj gume | Hotel Stepic</title>
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
   </head>
   <body>
      <div class="logo">
         <a href="index.php" 
            ><img src="Logo.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="190" height="85"></a>
      </div>
      <a href="skica.php"
      <button type="button" class="btn btn-primary btn-lg" title="Vrati se nazada na hotel" style="float: right; margin-right:20px;margin-top:20px;">Vrati se na SKICU</button></a>
      <br><br><br><br>
      <div class="container">
         <?php
            if (isset($_REQUEST['submit'])){
            						$idUser = mysqli_real_escape_string($con, stripslashes($_REQUEST['idUser']));
            						$TireWidth = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireWidth']));
            						$TireRadio = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireRadio']));
            						$dotz = mysqli_real_escape_string($con, stripslashes($_REQUEST['dotz']));
                              $tire_depth = mysqli_real_escape_string($con, stripslashes($_REQUEST['tire_depth']));
            						$TireDimension = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireDimension']));
            						$season = mysqli_real_escape_string($con, stripslashes($_REQUEST['season']));
            $rims = mysqli_real_escape_string($con, stripslashes($_REQUEST['rims']));
            						$quantity = mysqli_real_escape_string($con, stripslashes($_REQUEST['Quantity']));;
            $date1 = mysqli_real_escape_string($con, stripslashes($_REQUEST['datum']));
            $date11 = strtotime($date1);
            						$date2 = date('d-m-Y',$date11);
            $date3 = date('Y-m-d',$date11);
            $date4 = date('Y-m-d');
            
            						
            						//greske
            						$gUser = "";
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
            						
            						
									if(!empty($redX) &&  !empty($kolonaX) && !empty($spratX)){
            						$quer2 ="SELECT idMesto, zauzeto FROM mesto WHERE red = '$redX' AND kolona = '$kolonaX' AND sprat = '$spratX'";
            						$result2 = mysqli_query($con, $quer2);
            						$pow = mysqli_fetch_row($result2);
            						$idPlace = $pow[0];
            						$isTaken = $pow[1];
									}
            						
            						////////////////////// GRESKE ////////////////////
            						
            						//odabrana musterija
            						if($idUser == -1){
            							$gUser = "- Odaberite musteriju<br>";
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
                              if ($date1 == ""){
                                 $gDatum = "- Unesite datum<br>";
                                 $daljeIde = 0;
                              }
            						
            						//mesto
            						if(empty($redX) ||  empty($kolonaX) || empty($spratX) || empty($idPlace)){
            							$gMesto = "- Morate uneti mesto u hotelu";
            							$daljeIde = 0;
            						}
									
            						
            						//ako je mesto zauzeto
            						if($daljeIde == 1){
            						if($isTaken + $quantity > 4){
            							$gZauzeto = "-  Nema dovoljno mesta (pronadji slobodno mesto <a href='slobodnaMesta.php'>ovde</a>)";
            							$daljeIde = 0;
            						}
            						
            						else if ($isTaken != 0 && $isTaken != 1 && $isTaken != 2 && $isTaken != 3 && $isTaken != 4){
            							$gZauzeto = "- Mesto u hotelu ne postoji";
            							$daljeIde = 0;
            						}
            						}
            						
            						////////////////////////////////
            						if($daljeIde == 1){
            						
									$dateCurrent = date('d-m-Y');
									////
									$dan = substr("$date2",0,2);
									$mesec = substr("$date2",3,2);
									$god = substr("$date2",-4);
									$dateInput1 = "$god-$mesec-$dan";
									/////
									
									$sqlW = "SELECT ime, mesto FROM korisnik WHERE idKorisnik = '$idUser'";
									$resultW = mysqli_query($con, $sqlW);
									$rowW = mysqli_fetch_row($resultW);
									$nameY = $rowW[0];
									$cityY = $rowW[1];
									
									$sql1 = "INSERT INTO evidencija (musterija, gumaCelo,precnik, dot, dubinaSare, sezona, felna, kolicina,mesto, datum, datumIzmene, datum1, tipIzmene) VALUES ('$nameY - $cityY', '$TireWidth/$TireRadio R$TireDimension','R$TireDimension',
									'$dotz', '$tire_depth','$season','$rims',$quantity,'$redX$kolonaX/$spratX','$date2','$dateCurrent','$dateInput1','DODATO')";
										if($con->query($sql1) === TRUE){
										}
										else
											echo "<h1>BAD</h1>";
                              
            						$query = "INSERT INTO cuvanje (idKorisnik, idMesto, sirina, profil, precnik, gumeCelo, dot, dubinaSare, sezona,felna, kolicina,datum) VALUES 
            						('$idUser', '$idPlace', '$TireWidth', '$TireRadio', '$TireDimension','$TireWidth/$TireRadio R$TireDimension', '$dotz', '$tire_depth', '$season','$rims', '$quantity', '$date2')";
            						$result = mysqli_query($con, $query);
            						
            						if($result){
            							echo "<div class='alert alert-success'>
            							<h3>Uspesno ste se dodali u hotel.</h3>
            							Kliknite ovde da se vratite na skicu: <a href='skica.php'>Skica baze</a>
            							</div>";
            							
            							//rezervise mesto
            						   $query12 ="SELECT mestoCelo FROM mesto WHERE red = '$redX' AND kolona = '$kolonaX' AND sprat = '$spratX'";
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
            							" .$gUser. "" .$gSirina. "" .$gProfil. "" .$gDimenzija. "" .$gKolicina. "" .$gDot. "" .$gDubinaSare. "" .$gDatum. "" .$gZauzeto. "" .$gMesto. "
            							</strong>
            						</div>
            <script type=\"text/JavaScript\">
            setTimeout(() => {
            if((0$idUser) != -1){document.getElementById(\"idUser\").value = $idUser;}
            if(0$TireWidth != 0){document.getElementById(\"TireWidth\").value = ($TireWidth + 0);}
            if(0$TireRadio != 0){document.getElementById(\"TireRadio\").value = ($TireRadio + 0);}
            if(0$TireDimension != 0){document.getElementById(\"TireDimension\").value = ($TireDimension + 0);}
            if(0$quantity != 0){document.getElementById(\"Quantity\").value = ($quantity + 0);}
            if(\"$dotz\" != \"\"){document.getElementById(\"dotz\").value = (\"$dotz\" + \"\");}
            if(0$tire_depth != 0){document.getElementById(\"tire_depth\").value = ($tire_depth + 0);}
            
            
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
            
            $idUser = mysqli_real_escape_string($con, stripslashes($_REQUEST['idUser']));
            $TireWidth = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireWidth']));
            $TireRadio = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireRadio']));
            $dotz = mysqli_real_escape_string($con, stripslashes($_REQUEST['dotz']));
            $tire_depth = mysqli_real_escape_string($con, stripslashes($_REQUEST['tire_depth']));
            $TireDimension = mysqli_real_escape_string($con, stripslashes($_REQUEST['TireDimension']));
            $season = mysqli_real_escape_string($con, stripslashes($_REQUEST['season']));
            $rims = mysqli_real_escape_string($con, stripslashes($_REQUEST['rims']));
            $quantity = mysqli_real_escape_string($con, stripslashes($_REQUEST['Quantity']));
            $date1 = mysqli_real_escape_string($con, stripslashes($_REQUEST['datum']));
            $date11 = strtotime($date1);
            $date2 = date('d-m-Y',$date11);
            $date3 = date('Y-m-d',$date11);
            $date4 = date('Y-m-d');

            
            $quer1 ="SELECT zauzeto FROM mesto WHERE red = '$redX' AND kolona = '$kolonaX' AND sprat = '$spratX'";
            $result1 = mysqli_query($con, $quer1);
            $slobodno = mysqli_fetch_row($result1);
            $slobodno1 = $slobodno[0];
            $slobodno2 = 4 - $slobodno1;
            
            $quer2 ="SELECT mestoCelo FROM mesto WHERE red = '$redX' AND kolona = '$kolonaX' AND sprat = '$spratX'";
            $result2 = mysqli_query($con, $quer2);
            $celo = mysqli_fetch_row($result2);
            $celo1 = $celo[0];
            
            
            if (mysqli_num_rows($result1) > 0) {
            
            if($slobodno1 == 4){
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
            if((0$idUser) != -1){document.getElementById(\"idUser\").value = $idUser;}
            if(0$TireWidth != 0){document.getElementById(\"TireWidth\").value = ($TireWidth + 0);}
            if(0$TireRadio != 0){document.getElementById(\"TireRadio\").value = ($TireRadio + 0);}
            if(0$TireDimension != 0){document.getElementById(\"TireDimension\").value = ($TireDimension + 0);}
            if(0$quantity != 0){document.getElementById(\"Quantity\").value = ($quantity + 0);}
            if(\"$dotz\" != \"\"){document.getElementById(\"dotz\").value = (\"$dotz\" + \"\");}
            if(0$tire_depth != 0){document.getElementById(\"tire_depth\").value = ($tire_depth + 0);}
            
            
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
                  <label for="disabledTextInput">Musterija</label>
                  <select id="idUser" name="idUser" class="form-control">
                     <option value="-1"; selected>Odaberi musteriju</option>
                     <?php
                        $sql = "SELECT * FROM korisnik WHERE 1 ORDER BY ime ASC;";   
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        while($roww = mysqli_fetch_assoc($result)) {
                        echo "
                        <option value=\"". $roww['idKorisnik']. "\">". $roww['ime']. " - ". $roww['mesto']. "</option>";
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
                     border-bottom: 4px solid red;">Detalji guma</label></center>
               </div>
               <div class="col-xs-2">
                  <label></label> 
               </div>
               <div class="col-xs-3">
                  <center><label style="font-size: 130%;text-decoration: none;
                     border-bottom: 4px solid red;">Detalji mesta</label></center>
               </div>
            </div>
            <div class="form-group row">
               <label for="TireWidth" class="col-xs-1 col-form-label" >Sirina</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="TireWidth" name="TireWidth" type="number" placeholder="npr. 195" autocomplete="off">
               </div>
               <div class="col-xs-2"></div>
               <label for="RowPlace" class="col-xs-1 col-form-label" >Red</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="RowPlace" name="RowPlace" value="<?php echo $redX?>" type="text" placeholder="npr. C" autocomplete="off" disabled>
               </div>
            </div>
            <div class="form-group row">
               <label for="TireRadio" class="col-xs-1 col-form-label" >Profil</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="TireRadio" name="TireRadio" type="number" placeholder="npr. 65" autocomplete="off">
               </div>
               <div class="col-xs-2"></div>
               <label for="ColumnPlace" class="col-xs-1 col-form-label" >Kolona</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="ColumnPlace" name="ColumnPlace" value="<?php echo $kolonaX?>" type="number" placeholder="npr. 6" autocomplete="off" disabled>
               </div>
            </div>
            <div class="form-group row">
               <label for="TireDimension" class="col-xs-1 col-form-label" >Precnik</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="TireDimension" name="TireDimension" type="number" placeholder="npr. 15" autocomplete="off">
               </div>
               <div class="col-xs-2"></div>
               <label for="FloorPlace" class="col-xs-1 col-form-label" >Sprat</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="FloorPlace" name="FloorPlace" value="<?php echo $spratX?>" type="number" placeholder="npr. 3" autocomplete="off" disabled>
               </div>
            </div>
            <div class="form-group row">
               <label for="Quantity" class="col-xs-1 col-form-label" >Kolicina</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="Quantity" name="Quantity" type="number" placeholder="npr. 4" autocomplete="off">
               </div>
               <div class="col-lg-3 col-xs-2"></div>
               <div class="col-xs-3">
                  <button type="submit" name="provera" class="btn btn-warning">Proveri da li je slobodno</button>
               </div>
            </div>
            <div class="form-group row">
               <label for="dotz" class="col-xs-1 col-form-label" >DOT</label> 
               <div class="col-xs-2">
                  <input class="form-control" id="dotz" name="dotz" type="text" placeholder="npr. 2017" autocomplete="off">
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
               <label for="tire_depth" class="col-xs-1 col-form-label" >Dubina Sare</label> 
               <div class="col-xs-3 col-sm-2">
                  <input class="form-control" id="tire_depth" name="tire_depth" type="number" placeholder="npr. 4" autocomplete="off">
               </div>
             </div>
            <div class="form-group row">
               <label for="idPrecnik" class="col-xs-1 col-form-label" >Sezona:</label> 
               <div class="col-xs-11">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="season" id="letnje" value="letnje" checked>
                     <label class="form-check-label" for="letnje">
                     Letnje
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="season" id="zimske" value="zimske">
                     <label class="form-check-label" for="zimske">
                     Zimske
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label for="idPrecnik" class="col-xs-1 col-form-label" >Felne:</label> 
               <div class="col-md-4 col-xs-6">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="rims" id="nema_felnu" value="nema_felnu" checked>
                     <label class="form-check-label" for="nema_felnu">
                     Bez felne
                     </label><br>
                     <input class="form-check-input" type="radio" name="rims" id="metalne_bez_ratkapna" value="metalne_bez_ratkapna">
                     <label class="form-check-label" for="metalne_bez_ratkapna">
                     Metalne bez ratkapna
                     </label>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="rims" id="metalne_sa_ratkapnama" value="metalne_sa_ratkapnama">
                        <label class="form-check-label" for="metalne_sa_ratkapnama">
                        Metalne sa ratkapnama
                        </label>
                     </div>
                     <input class="form-check-input" type="radio" name="rims" id="aluminijumske" value="aluminijumske">
                     <label class="form-check-label" for="aluminijumske">
                        Aluminijumske
                  </div>
               </div>
               <div class="col-md-1 "></div>
               <div class="col-md-5 col-xs-5"><strong>
               <label for="datum" class="col-form-label" >Datum:</label><br>
               <input type="date" id="datum" name="datum"></strong> 
               </div>
            </div>
      </div>
      <br>
      <center><button type="submit" name="submit" class="btn btn-success" style="font-size: large;">Unesi u bazu</button></center>
      </form><br>
      </div>
   </body>
</html>