<!DOCTYPE html>
<html>
   <head>
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
	  
	  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet" type="text/css">
      <style>
         body{
         background: url(pozadine/mobile-login.jpg);
         background-repeat: repeat-y;
         background-size: cover;
		 overflow-x: hidden;
         }
		 @media screen and (max-width: 1600px) {
		body {
		background: url(pozadine/background1.jpg);
		}
		}
		.central {
		margin-top: 7%;
		}
      </style>
   </head>
    <body>
		<div style="margin-top:25%";></div>
		<div class="container central">
			<div class="row">
			<div class="col-md-6">
					<img src="Logo.png" style="margin-left:-10%;"; data-toggle="tooltip" alt="Logo.png"  width="900" height="420">
				</div>
	            <div class="col-md-6">
		
		
		<?php
		session_start();
		require '../config.php';
			// ako je forma submitovana, unesi vrednosti u bazu podataka
			if (isset($_POST['email'])){
			    // brise backslashes i escapes specialne karaktere iz stringa
				$email = mysqli_real_escape_string($con, stripslashes($_REQUEST['email']));
				$password = mysqli_real_escape_string($con, stripslashes($_REQUEST['password']));
				
				// proverava da li je korisnik postojeci u bazi ili ne
				$pass = md5($password);
				$query = "SELECT * FROM login WHERE email='$email' and password='$pass'";
				$result = mysqli_query($con, $query);
				$rows = mysqli_num_rows($result);
		        if($rows == 1){
			    	$rowsingle = mysqli_fetch_array($result, MYSQLI_ASSOC);
		        	// postavlja vrednosti u session objektu
			    	$_SESSION['user_id'] = $rowsingle['idLogin'];
		        	// preusmerava korisnika na index.php
			    	header("Location: index.php");
		        } else {
					echo "<br><br><div class='alert alert-danger'><div style=\"font-size:60px;\">Pogresna lozinka ili password</div>
					<br><h1><a href=\"login.php\">Pokusajte ponovo ?</h1></div></div></div></div>";
							
				}
			} else {
		?>
		
	        
	            	<div class="form">
						<h1 style="font-size:100px; font-family:">Ulogujte se</h1>
						<form action="" method="post" name="login">
							<div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Email..." style="border:3px solid black; height:3em; font-size:50px;" required />
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="password" placeholder="Sifra..." style="border:3px solid black; height:3em; font-size:50px;" required/>
							</div>	
							<button type="submit" name="submit" class="btn btn-lg btn-success" style="height:3em; font-size:50px;">Ulogujte se</button>
						</form><br>
					</div>
				</div>
				
			</div>
		</div>
		<?php } ?>
	</body>
</html>