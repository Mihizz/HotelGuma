<?php
   require '../config.php'; 
   require '../auth.php';
   ?>
<html>
   <head>
      <link href="../bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="../bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="../bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="../bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="../bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../bootstrap/dataTables.bootstrap.css">
      <title>Hotel Guma Stepic- Dodaj kupca</title>
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
            ><img src="Logo.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="250" height="115"></a>
      </div>
	  
	  <a href="kupci.php"
      <button type="button" class="btn btn-primary btn-lg" title="Vrati se nazada na kupce" style="font-size:40px; color:#9192B7;float: right; margin-right:20px;margin-top:20px;">Vrati se na KUPCE</button></a>
	  
      <div style="height: 120px;"></div>
      <div class="container">
         <?php
            if (isset($_REQUEST['submit'])){
            						$name = mysqli_real_escape_string($con, stripslashes($_REQUEST['name']));
            						$village = mysqli_real_escape_string($con, stripslashes($_REQUEST['village']));
            
            $gIme = "";
            $daljeIde= 1;
            
            if(empty($name)){
            $gIme = "- Ime ne moze da ostane prazno";
            $daljeIde = 0;
            }
            
            
            if($daljeIde === 1){
				$dateCurrent = date('Y-m-d');
            
            						$query = "INSERT INTO korisnik (ime, mesto,datumUnosa) VALUES ('$name', '$village','$dateCurrent')";
            						$result = mysqli_query($con, $query);
            						if($result){
            							echo "<div class='alert alert-success'>
            							<p style=\"font-size:40px;\">Uspesno dodato</p>
            							<h1>Kliknite ovde da vidite sve kupce: <a href='kupci.php'>Kupci</a></h1>
            							</div>";
            						} else {
            							echo "<div class='alert alert-danger'>Neuspesno</div>";
            }
            
            }
            else {
            echo "<div class='alert alert-danger'>
            <p style=\"font-size:40px; text-decoration: underline;\">Neuspesno</p><h1>
            " .$gIme. "
            </h1>
            </div>";
            }
            					} 
            				?>
         <h2 style="font-family:Bungee; font-size: 60px; align-content:center;">Unos Korisnika u Bazu</h2>
         <br>
         <form method="post">
            <div class="form-group">
               <label for="disabledTextInput" style="font-size: 40px;">Ime musterije</label>
               <input type="text" name="name" id="disabledTextInput" title="Ovde unesi ime musterije" class="form-control" placeholder="Npr. Marko Posta" style="border:3px solid black; height:2.5em; font-size:50px;">
            </div>
            <br>
            <div class="form-group">
               <label for="disabledSelect" style="font-size: 40px;">Prebivaliste musterije</label>
               <select id="disabledSelect" name="village" class="form-control" title="Unesi prebivaliste korisnika" style="border:3px solid black; height:2.5em; font-size:50px;">
                  <option selected>Petrovac</option>
                  <option>Aljudovo</option>
                  <option>Batuša</option>
                  <option>Beograd</option>
                  <option>Boževac</option>
                  <option>Crljenac</option>
                  <option>Dubočka</option>
                  <option>Golubac</option>
                  <option>Jošanica</option>
                  <option>Kamenovo</option>
                  <option>Kladurovo</option>
                  <option>Knežica</option>
                  <option>Kalište</option>
                  <option>Kobilje</option>
                  <option>Kočetin</option>
                  <option>Kula</option>
                  <option>Leskovac</option>
                  <option>Manastirica</option>
                  <option>Malo Crniće</option>
                  <option>Melnica</option>
                  <option>Mirijevo</option>
                  <option>Orljevo</option>
                  <option>Pankovo</option>
                  <option>Požarevac</option>
                  <option>Ranovac</option>
                  <option>Rašanac</option>
                  <option>Stamnica</option>
                  <option>Starčevo</option>
                  <option>Salakovac</option>
                  <option>Sige</option>
                  <option>Svinjarevo</option>
                  <option>Tabanovac</option>
                  <option>Trnovče</option>
                  <option>Leskovac</option>
                  <option>Toponica</option>
                  <option>Veliki Popovac</option>
                  <option>Veliko Laole</option>
                  <option>Veliko Crniće</option>
                  <option>Veliko Selo</option>
                  <option>Vitovnica</option>
                  <option>Vrbnica</option>
                  <option>Zabrega</option>
                  <option>Zaova</option>
                  <option>Žagubica</option>
                  <option>Ždrelo</option>
                  <option>Drugo...</option>
               </select>
            </div>
            <br>
            <center><button type="submit" name="submit" class="btn btn-success" title="Unesi korisnika u bazu" style="font-size:large; height:3em; font-size:50px;">Unesi korisnika</button></center>
         </form>
      </div>
   </body>
</html>