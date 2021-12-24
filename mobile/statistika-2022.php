<?php
require '../config.php';
require '../auth.php';
//ukupno korisnika u bazi
$quer1 ="SELECT COUNT(idKorisnik) FROM korisnik WHERE datumUnosa LIKE '2022-%'";
                        $result1 = mysqli_query($con, $quer1);
                        $pow1 = mysqli_fetch_row($result1);
                        
                     if (mysqli_num_rows($result1) === 1) {
                     //echo 'true';
                        $countKorisnici = $pow1[0];
                     }
//ukupno rezervacija u bazi
$quer2 ="SELECT COUNT(idEvidencija) FROM evidencija WHERE datum LIKE '%-2022' && tipIzmene='DODATO'";
                        $result2 = mysqli_query($con, $quer2);
                        $pow2 = mysqli_fetch_row($result2);
                        
                     if (mysqli_num_rows($result2) === 1) {
                     //echo 'true';
                        $countRezervacije = $pow2[0];
                     }

//ukupno guma u bazi
$quer3 ="SELECT SUM(kolicina) FROM evidencija WHERE datum LIKE '%-2022' && tipIzmene='DODATO'";
                        $result3 = mysqli_query($con, $quer3);
                        $pow3 = mysqli_fetch_row($result3);
                        
                     if (mysqli_num_rows($result3) === 1) {
                     //echo 'true';
                        $countGume = $pow3[0];
                     } 
$ukupno = 144;


$quer4 = "SELECT korisnik.mesto, COUNT(korisnik.mesto) AS broj FROM korisnik WHERE datumUnosa LIKE '2022-%' GROUP BY mesto";  
$result4 = mysqli_query($con, $quer4);

$quer5 = "SELECT felna, COUNT(felna) AS broj1 FROM evidencija WHERE datum LIKE '%-2022' && tipIzmene='DODATO' GROUP BY felna";  
$result5 = mysqli_query($con, $quer5);

$quer6 = "SELECT SUBSTRING(gumaCelo, 9, 9) AS precnik, COUNT(SUBSTRING(gumaCelo, 9, 9)) AS broj2 FROM evidencija WHERE datum LIKE '%-2022' && tipIzmene='DODATO' GROUP BY precnik";  
$result6 = mysqli_query($con, $quer6);
     
   ?>

<!DOCTYPE HTML>
<html>
<head>
   <title>Pocetna stranica</title>
   
	
      <script src="../bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="../bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="../bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="../bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
	  <script language="JavaScript" src="../bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../bootstrap/dataTables.bootstrap.css">
	  <link href="bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <title>Statistika 2022 | Hotel Stepic</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
      <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">	  
	  
	  <link rel="stylesheet" href="../font-awesome/css/all.css">
	  <link rel="stylesheet" href="../font-awesome/css/all.min.css">
	  
		<script defer src="../font-awesome/js/brands.js"></script>
		<script defer src="../font-awesome/js/solid.js"></script>
		<script defer src="../font-awesome/js/fontawesome.js"></script>
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
           font-size: 30px; 
           font-family: Bahnschrift;
         }
         b{
           font-size: 40px;  
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
         <a href="index.php"><img src="Logo.png" style="padding: 10px;" data-toggle="tooltip"  title="Povratak na pocetnu" alt="Logo.png"   width="250" height="115"></a>
      </div>
	<nav>
		<a class="btn btn-primary btn-other" style="font-size:30px;" href="statistika.php">Trenutno</a>
		<a class="btn btn-primary btn-other" style="font-size:30px;" href="statistika-ukupna.php">Ukupno</a>
		<a class="btn btn-primary btn-selected dropdown-toggle" href="#"
		role="button" id="dropdownMenuLink" data-toggle="dropdown" 
		aria-haspopup="true" aria-expanded="false" style="font-size:30px;">Po godinama  <i class="fas fa-chevron-circle-down"></i></a>
			<div class="dropdown-menu" style="min-width: 70px !important;text-align:center;">
			<a class="btn dropdown-item" style="padding:-5px; font-size:30px;" href="statistika-2021.php">2021</a><br>
      <a class="btn btn-primary dropdown-item" style="padding:-5px; font-size:30px;" href="#">2022</a><br>
		</div>
	</nav> 
	  	 
	 
      <div style="height: 150px;"></div>
        <center><h1>TRENUTNO NEDOSTPUNO</h1> </center>
     <!--  
<div class="container" align="center">
            <h1 class="text-center" style="font-family:Bungee"><div style="text-decoration:underline;">Statistika </div><div style="font-size:25px;">2022 godina</div></h1><br>

         <p>Dodatih korisnika: <b><?php echo "$countKorisnici"; ?></b> </p>
         <p>Kreiranih rezervacija: <b><?php echo "$countRezervacije"; ?></b> </p>
         <p>Smestenih guma: <b><?php echo "$countGume"; ?></b> </p>
      <br><br></div>
		<h2 class="text-center" style="font-family:Bungee"><div style="text-decoration:underline;">Detaljna pie tabala</div></h2>
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

  -->    
</body>
</html>