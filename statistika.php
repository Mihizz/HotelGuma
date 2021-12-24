<?php
require 'config.php';
require 'auth.php';
//ukupno korisnika u bazi
$quer1 ="SELECT COUNT(idKorisnik) FROM korisnik";
                        $result1 = mysqli_query($con, $quer1);
                        $pow1 = mysqli_fetch_row($result1);
                        
                     if (mysqli_num_rows($result1) === 1) {
                     //echo 'true';
                        $countKorisnici = $pow1[0];
                     }
//ukupno rezervacija u bazi
$quer2 ="SELECT COUNT(idCuvanje) FROM cuvanje JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik WHERE 1";
                        $result2 = mysqli_query($con, $quer2);
                        $pow2 = mysqli_fetch_row($result2);
                        
                     if (mysqli_num_rows($result2) === 1) {
                     //echo 'true';
                        $countRezervacije = $pow2[0];
                     }

//ukupno guma u bazi
$quer3 ="SELECT SUM(cuvanje.kolicina) FROM cuvanje JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik WHERE 1";
                        $result3 = mysqli_query($con, $quer3);
                        $pow3 = mysqli_fetch_row($result3);
                        
                     if (mysqli_num_rows($result3) === 1) {
                     //echo 'true';
                        $countGume = $pow3[0];
                     }


$ukupno = 904;


$quer4 = "SELECT korisnik.mesto, COUNT(korisnik.mesto) AS broj FROM korisnik GROUP BY mesto";  
$result4 = mysqli_query($con, $quer4);

$quer5 = "SELECT felna, COUNT(felna) AS broj1 FROM cuvanje JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik GROUP BY felna";  
$result5 = mysqli_query($con, $quer5);

$quer6 = "SELECT precnik, COUNT(precnik) AS broj2 FROM cuvanje JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik GROUP BY precnik";  
$result6 = mysqli_query($con, $quer6);
     
   ?>

<!DOCTYPE HTML>
<html>
<head>
   <title>Pocetna stranica</title>
   
	
      <script src="bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
	  <script language="JavaScript" src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap.css">
	  <link href="bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <title>Statistika | Hotel Stepic</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
      <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">	  
	  
	  <link rel="stylesheet" href="font-awesome/css/all.css">
	  <link rel="stylesheet" href="font-awesome/css/all.min.css">
	  
		<script defer src="font-awesome/js/brands.js"></script>
		<script defer src="font-awesome/js/solid.js"></script>
		<script defer src="/font-awesome/js/fontawesome.js"></script>
		<style>
         img:hover {
         background-color: #888888; 
         }
		 .logo {
         float: left;
         }
         body{
         background: url(pozadine/background7.jpg);
         background-repeat: repeat-y;
         background-size: 1920px 937px;
         margin: 0; 
         height: 100%; 
         overflow-x: hidden
         }
         p{
           font-size: 20px; 
           font-family: Bahnschrift;
         }
         b{
           font-size: 25px;  
           margin-left: 10px;
         }
         h4 {
            font-family: Bahnschrift;
            margin-bottom: -25px;
         }
		 nav{
			 float: right;
			 margin: 15px;
			 
		 }
		 .btn-selected{
			background-color:#008000;
			border:#006400;
			margin-left:5px;
			margin-right:5px;
			padding: 10px;
		 }
		 
		 .btn-selected:hover{
			background-color:#006400;
		 }
		 
		 .btn-other{
			 margin-left:5px;
			 margin-right:5px;
			 padding: 10px;
		 }
		 
		 @media screen and (max-width: 1200px) {
		.dissapear {
		display: none;
		}
}
      </style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
   <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Prebivaliste', 'brojP'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["mesto"]."', ".$row["broj"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistika za prebivaliste kupaca',  
                      //is3D:true,  
                      pieHole: 0.3,
         backgroundColor: { fill:'transparent' }  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>
<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Felne', 'brojF'],  
                          <?php  
                          while($row = mysqli_fetch_array($result5))  
                          {  
                               echo "['".$row["felna"]."', ".$row["broj1"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistika za felne',  
                      //is3D:true,  
                      pieHole: 0.3,
         backgroundColor: { fill:'transparent' }  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart1'));  
                chart.draw(data, options);  
           }  
           </script>           
<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Precnik', 'brojP'],  
                          <?php  
                          while($row = mysqli_fetch_array($result6))  
                          {  
                               echo "['R".$row["precnik"]."', ".$row["broj2"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistika za precnik guma',  
                      //is3D:true,  
                      pieHole: 0.3,
         backgroundColor: { fill:'transparent' }  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>           
<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
               var data = google.visualization.arrayToDataTable([
                  ['Mesto','Zauzeto', 'Slobodno'],  
                  <?php  
                  echo "['Mesto', ",$countGume,",",$ukupno-$countGume,"]";   
                  ?> 
            ]);

         var options = {
         maintainAspectRatio: false,
         isStacked: true,
         legend: {position: 'none'},
         hAxis: { baselineColor: '#d9d9e3',
         gridlineColor: '#d9d9e3',textPosition: 'none' },
         vAxis: { baselineColor: '#d9d9e3',
         gridlineColor: '#d9d9e3',textPosition: 'none' },
         width: '100%',
         height: '100',
         backgroundColor: { fill:'transparent' }
        
      };  
                var chart = new google.visualization.BarChart(document.getElementById('diagram'));  
                chart.draw(data, options);  
           }  
           </script>
</head>
<body>
   <div class="logo">
         <a href="index.php"><img src="Logo.png" style="padding: 10px;" data-toggle="tooltip"  title="Povratak na pocetnu" alt="Logo.png"  width="190" height="85"></a>
      </div>
	<nav>
		<a class="btn btn-primary btn-selected">Trenutno</a>
		<a class="btn btn-primary btn-other" href="statistika-ukupna.php">Ukupno</a>
		<a class="btn btn-primary btn-other dropdown-toggle" href="#"
		role="button" id="dropdownMenuLink" data-toggle="dropdown" 
		aria-haspopup="true" aria-expanded="false">Po godinama  <i class="fas fa-chevron-circle-down"></i></a>
			<div class="dropdown-menu" style="min-width: 70px !important;text-align:center;">
			<a class="btn dropdown-item" style="padding:-5px;font-size:18px;" href="statistika-2021.php">2021</a><br>
			<a class="btn dropdown-item" style="padding:-5px;font-size:18px;" href="statistika-2022.php">2022</a><br>
		</div>
	</nav> 
	  	  
	  
      <br><br><br>
<div class="container" align="center">
            <h1 class="text-center" style="font-family:Bungee">Statistika</h1><br>

         <p>Trenutno korisnika u bazi: <b><?php echo "$countKorisnici"; ?></b> </p>
         <p>Trenutno rezervacija u bazi: <b><?php echo "$countRezervacije"; ?></b> </p>
         <p>Trenutno guma u bazi: <b><?php echo "$countGume"; ?></b> </p>
      <br></div> 
      <h4 align="center">Zauzeto mesta VS Slobodno mesta</h4>   
                <div id="diagram"></div>  
                <br>
		  <div class="row"> 
            <div class="col-xs-12 col-lg-4" align="center"> 
                <div id="piechart" style="width: 750px; height: 500px;"></div> 
            </div>   
            <div class="col-xs-12 col-lg-4" align="center">  
                <div id="piechart1" style="width: 900px; height: 500px;"></div>   
            </div> 
            <div class="col-xs-12 col-lg-4" align="center"> 
                <div id="piechart2" style="width: 750px; height: 500px;"></div>  
                 </div> </div>     
</body>
</html>