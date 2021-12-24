<?php
require 'config.php';
require 'auth.php';
ini_set('max_execution_time', 20);

/*$viewDelete = "DROP VIEW IF EXISTS precnik1";
$result0 = mysqli_query($con, $viewDelete);*/

$mesec = array("Jan","Feb","Mar","Apr","Maj","Jun","Jul","Avg","Sep","Okt","Nov","Dec");

//ukupno korisnika u bazi
$quer1 ="SELECT COUNT(idKorisnik) FROM korisnik";
                        $result1 = mysqli_query($con, $quer1);
                        $pow1 = mysqli_fetch_row($result1);
                        
                     if (mysqli_num_rows($result1) === 1) {
                     //echo 'true';
                        $countKorisnici = $pow1[0];
                     }
//dodate rezervacije
$quer2 ="SELECT COUNT(idEvidencija) FROM evidencija WHERE tipIzmene = 'DODATO'";
                        $result2 = mysqli_query($con, $quer2);
                        $pow2 = mysqli_fetch_row($result2);
                        
                     if (mysqli_num_rows($result2) === 1) {
                        $countDodate = $pow2[0];
                     }
					
//izmenjene rezervacije
$quer3 ="SELECT COUNT(idEvidencija) FROM evidencija WHERE tipIzmene = 'IZMENA NOVO'";
                        $result3 = mysqli_query($con, $quer3);
                        $pow3 = mysqli_fetch_row($result3);
                        
                     if (mysqli_num_rows($result3) === 1) {
                        $countIzmenjene = $pow3[0];
                     }

//obrisane rezervacije
$quer4 ="SELECT COUNT(idEvidencija) FROM evidencija WHERE tipIzmene = 'OBRISANO'";
                        $result4 = mysqli_query($con, $quer4);
                        $pow4 = mysqli_fetch_row($result4);
                        
                     if (mysqli_num_rows($result4) === 1) {
                        $countObrisane = $pow4[0];
                     }


//ukupno guma u bazi
$quer5 ="SELECT SUM(kolicina) FROM evidencija WHERE tipIzmene = 'DODATO'";
                        $result5 = mysqli_query($con, $quer5);
                        $pow5 = mysqli_fetch_row($result5);
                        
                     if (mysqli_num_rows($result5) === 1) {
                     //echo 'true';
                        $countGume = $pow5[0];
                     } 
     
   ?>  

<head>
   <title>Pocetna stranica</title>
   
	
      <script src="bootstrap/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <script language="JavaScript" src="bootstrap/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
      <script language="JavaScript" src="bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
	  <script language="JavaScript" src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap.css">
	  <link href="bootstrap/bootstrap1.min.css" rel="stylesheet" id="bootstrap-css">
      <title>Ukupna statistika | Hotel Stepic</title>
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
		 
		 .graphs {
			 width: 60em; 
			 height: 35em; 
			 margin:15px; 
			 padding:5px; 
			 background-color: white; 
			 border: 1px solid black;
		 }
		 
         p,span{
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
		 
		 .gumeTotal{
			 border: 1px solid black;
			 background-color: #FF6347;
			 padding-top: 25px;
			 padding-bottom: 25px;
			 padding-left:170px;
			 padding-right:170px;
		 }
		 
		 @media screen and (min-width: 1000px) {
		.dissapear {
		display: none;
		}
		@media screen and (max-width: 1000px) {
		.dissapear1 {
		display: none;
		}
}
      </style>
</head>
<body>
   <div class="logo">
         <a href="index.php"><img src="Logo.png" style="padding: 10px;" data-toggle="tooltip"  title="Povratak na pocetnu" alt="Logo.png"  width="190" height="85"></a>
      </div>
	<nav>
		<a class="btn btn-primary btn-other" href="statistika.php">Trenutno</a>
		<a class="btn btn-primary btn-selected" href="statistika-ukupna.php">Ukupno</a>
		<a class="btn btn-primary btn-other dropdown-toggle" href="#"
		role="button" id="dropdownMenuLink" data-toggle="dropdown" 
		aria-haspopup="true" aria-expanded="false">Po godinama  <i class="fas fa-chevron-circle-down"></i></a>
			<div class="dropdown-menu" style="min-width: 70px !important;text-align:center;">
      <a class="btn dropdown-item" style="padding:-5px;font-size:18px;" href="statistika-2021.php">2021</a><br>
      <a class="btn dropdown-item" style="padding:-5px;font-size:18px;" href="statistika-2022.php">2022</a><br>
		</div>
	</nav> 
<div style="height:80px;"></div>
<div class="container" align="center">
            <h1 class="text-center" style="font-family:Bungee">Ukupna statistika</h1><br>

         <p>Ukupan broj korisnika: <b><?php echo "$countKorisnici"; ?></b> </p><br>
         <p>Ukupno dodatih rezervacija: <b><?php echo "$countDodate"; ?></b> </p>
		 <p>Ukupno izmenjenih rezervacija: <b><?php echo "$countIzmenjene"; ?></b> </p>
		 <p>Ukupno obrisanih rezervacija: <b><?php echo "$countObrisane"; ?></b> </p><br><br>
         <span class="gumeTotal">Ukupno guma u bazi: <b><?php echo "$countGume"; ?></b> </span></div> 
	  <div style="height:80px;"></div>
		<h2 class="text-center" style="font-family:Bungee"><div style="text-decoration:underline;">Statistika za gume</div></h2>
		  <div class="row">  
            <div class="col-lg-6 col-12 " align="center"> <!-- totatalTiersChart -->
				<h3 style="font-family:Bungee">Ukupno guma u bazi po mesecima</h3>
                <div id="totatalTiersChart" class="graphs"></div>   
            </div>
            <div class=" col-lg-6 col-12" align="center"> <!-- addedTiresChart -->
				<h3 style="font-family:Bungee">Ukupno guma dodatih u hotel po godinama</h3>
                <div id="addedTiresChart" class="graphs"></div>  
                 </div> </div>
				 <div style="height:80px;"></div>
		<h2 class="text-center" style="font-family:Bungee"><div style="text-decoration:underline; ">Statistika za precnik i felne</div></h2>
		  <div class="row">  
            <div class="col-xs-12 col-lg-6" align="center"> <!-- tireRadChart --> 
			<h3 style="font-family:Bungee">Prečnik gume po godinama</h3>
                <div id="tireRadChart" class="graphs"></div>   
            </div> 
            <div class="col-xs-12 col-lg-6" align="center"> <!-- rimsChart -->
			<h3 style="font-family:Bungee">Tipovi felni po godinama</h3>
                <div id="rimsChart" class="graphs"></div>  
                 </div> </div>

				 <div style="height:80px;"></div>
		<h2 class="text-center" style="font-family:Bungee"><div style="text-decoration:underline; ">Statistika za gume</div></h2>
		  <div class="row">  
            <div class="col-xs-12 col-lg-6" align="center"> <!-- userTimeChart -->
			<h3 style="font-family:Bungee">Ukupno korisnika u bazi po mesecima</h3>			
                <div id="userTimeChart" class="graphs"></div>   
            </div> 
            <div class="col-xs-12 col-lg-6" align="center"> <!-- totalUsersChart -->
			<h3 style="font-family:Bungee">Ukupno korisnika po godinama</h3>			
                <div id="totalUsersChart" class="graphs"></div>  
                 </div> </div> <br>
</body>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart); 
       
           function drawChart() {
        var data = new google.visualization.DataTable();
          data.addColumn('string','Datum');
          data.addColumn('number','2021');
          data.addColumn('number','2022');
          data.addRows([
    <?php
for ($i = 0;$i < count($mesec);$i++)
{
    $month = $i + 1;
    //ZA GODINU 2021
    $tTF_query = "SELECT tipIzmene, SUM(kolicina), COUNT(*) FROM evidencija 
  WHERE tipIzmene IN ('DODATO','IZMENA NOVO','IZMENA STARO','OBRISANO') && datum1 < '2021-$month-31' GROUP BY tipIzmene";
    $tTF_result = mysqli_query($con, $tTF_query);
    $return2021 = 0;

    if (mysqli_num_rows($tTF_result) > 0)
    {
        while ($tTF_pow = mysqli_fetch_row($tTF_result))
        {
            switch ($tTF_pow[0])
            {
                case "DODATO":
                    $return2021 += $tTF_pow[1];
                break;
                case "IZMENA NOVO":
                    $return2021 += $tTF_pow[1];
                break;
                case "IZMENA STARO":
                    $return2021 -= $tTF_pow[1];
                break;
                case "OBRISANO":
                    $return2021 -= $tTF_pow[1];
                break;
            }
        }
    }

    // ZA GODINU 2022
    $tTF_query1 = "SELECT tipIzmene, SUM(kolicina), COUNT(*) FROM evidencija 
  WHERE tipIzmene IN ('DODATO','IZMENA NOVO','IZMENA STARO','OBRISANO') && datum1 < '2022-$month-31' GROUP BY tipIzmene";

    $tTF_result1 = mysqli_query($con, $tTF_query1);
    $return2022 = 0;

    if (mysqli_num_rows($tTF_result1) > 0)
    {
        while ($tTF_pow1 = mysqli_fetch_row($tTF_result1))
        {
            switch ($tTF_pow1[0])
            {
                case "DODATO":
                    $return2022 += $tTF_pow1[1];
                break;
                case "IZMENA NOVO":
                    $return2022 += $tTF_pow1[1];
                break;
                case "IZMENA STARO":
                    $return2022 -= $tTF_pow1[1];
                break;
                case "OBRISANO":
                    $return2022 -= $tTF_pow1[1];
                break;
            }
        }
    }
    $CurrMonth = date('m');
      /// TRENUTNI MESEC

    if ( $CurrMonth < $month) {
      echo "['$mesec[$i]',$return2021 , null],";
    }
    else{
      echo "['$mesec[$i]',$return2021 ,$return2022],";
    }
        
    //SELECT '2021', SUM(kolicina) FROM evidencija WHERE tipIzmene ='DODATO' && datum1 LIKE '2021-%'UNION 
    //  SELECT '2020', SUM(kolicina) FROM evidencija WHERE tipIzmene ='DODATO' && datum1 LIKE '2020-%'

}
?>
    ]);
         var options = {
          title: 'Ukupno guma u bazi',
          interpolateNulls: true,
          hAxis: {title: 'Meseci'},
          vAxis: {minValue: 0},
        };

        var chart = new google.visualization.AreaChart(document.getElementById('totatalTiersChart'));
        chart.draw(data, options); 
           }  
     </script>
        
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
      
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Godina', 'Gume:'],
      <?php
        $aTF_query1 = "SELECT '2021', SUM(kolicina) FROM evidencija WHERE tipIzmene ='DODATO' && datum1 LIKE '2021-%'UNION 
                 SELECT '2022', SUM(kolicina) FROM evidencija WHERE tipIzmene ='DODATO' && datum1 LIKE '2022-%'";
        $aTF_result1 = mysqli_query($con, $aTF_query1);
        $resultAddedTiers = 0;
        
        while ($aTF_pow = mysqli_fetch_row($aTF_result1)){
          if (is_null($aTF_pow[1])) {
            echo "['$aTF_pow[0]',0], \r\n";
          }
          else{
            echo "['$aTF_pow[0]',$aTF_pow[1]], \r\n";
          }
          
        }

      ?>
        ]);

        var options = {
          chart: {
            title: 'Ukupno dodatih guma u hotel guma 2021-2022',
          },
          bars: 'horizontal',
      colors: ['#2E8B57'],
      legend: { position: "none" }
        };

        var chart = new google.charts.Bar(document.getElementById('addedTiresChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
           
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStacked);

      function drawStacked() {
  
    var data = google.visualization.arrayToDataTable([
    <?php 
    $tRF_view0 = "DROP VIEW precnikTable";
    $tRF_view01 = mysqli_query($con, $tRF_view0);

    $tRF_view = "CREATE VIEW precnikTable AS SELECT precnik FROM evidencija GROUP BY precnik";
    $tRF_view1 = mysqli_query($con, $tRF_view);
    
    $tRF_query0 = "SELECT precnik FROM evidencija GROUP BY precnik";
    $tRF_result0 = mysqli_query($con, $tRF_query0);
        
    $tRF_query1 = "SELECT precniktable.precnik, COUNT(evidencija.precnik) AS broj FROM precniktable LEFT JOIN evidencija ON precniktable.precnik = evidencija.precnik 
    AND evidencija.datum1 LIKE '2021-%' GROUP BY precniktable.precnik";
    $tRF_result1 = mysqli_query($con, $tRF_query1);
        
        
    $tRF_query2 = "SELECT precniktable.precnik, COUNT(evidencija.precnik) AS broj FROM precniktable LEFT JOIN evidencija ON precniktable.precnik = evidencija.precnik 
    AND evidencija.datum1 LIKE '2022-%' GROUP BY precniktable.precnik";
    $tRF_result2 = mysqli_query($con, $tRF_query2);
    
    echo "['Godina',";
    while ($tRF_pow0 = mysqli_fetch_row($tRF_result0)){
          echo "'$tRF_pow0[0]',";
        }
    echo '],';
    
    echo "['2021',";  //NEPRECIZNO
    while ($tRF_pow1 = mysqli_fetch_row($tRF_result1)){
      $qq1 = $tRF_pow1[1] * 4;
      echo "$qq1,";
    }
    echo '],';
    
    echo "['2022',";  //NEPRECIZNO
    while ($tRF_pow2 = mysqli_fetch_row($tRF_result2)){
      $qq2 = $tRF_pow2[1] * 4;
      echo "$qq2,";
    }
    echo ']';
    ?>
      ]);

      var options = {

        title: 'Prečnik guma',
        chartArea: {width: '50%'},
        isStacked: true,
        hAxis: {
          title: 'Ukuono guma',
          minValue: 0,
        },
        vAxis: {
          title: 'Godina'
        }
      };
    
    var chart = new google.visualization.BarChart(document.getElementById("tireRadChart"));
      chart.draw(data, options);
    }
  </script> 

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
  
    var data = google.visualization.arrayToDataTable([
    ['Godina','aluminijumske','metalne_bez_ratkapna','metalne_sa_ratkapnama','nema_felnu'],
    <?php             
    $rF_query1 = "SELECT felne_table.felna, COUNT(evidencija.felna) AS broj1 FROM felne_table LEFT JOIN evidencija ON felne_table.felna = evidencija.felna 
    AND evidencija.datum1 LIKE '2021-%' GROUP BY felne_table.felna";
    $rF_result1 = mysqli_query($con, $rF_query1);
        
        
    $rF_query2 = "SELECT felne_table.felna, COUNT(evidencija.felna) AS broj1 FROM felne_table LEFT JOIN evidencija ON felne_table.felna = evidencija.felna 
    AND evidencija.datum1 LIKE '2022-%' GROUP BY felne_table.felna";
    $rF_result2 = mysqli_query($con, $rF_query2);
    
    
    echo "['2021',";  //NEPRECIZNO
    while ($rF_pow1 = mysqli_fetch_row($rF_result1)){
      $qq1 = $rF_pow1[1] * 4;
      echo "$qq1,";
    }
    echo '],';
    
    echo "['2022',";  //NEPRECIZNO
    while ($rF_pow2 = mysqli_fetch_row($rF_result2)){
      $qq2 = $rF_pow2[1] * 4;
      echo "$qq2,";
    }
    echo ']';
    ?>
      ]);

      var options = {
          chart: {
            title: 'Tipovi felni koji se javljaju na gumama koji su uneti u bazu',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('rimsChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
  </script> 

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  --> 
 
 <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart); 
       
           function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Datum', '2021', '2022'],
    <?php
for ($i = 0;$i < count($mesec);$i++)
{
    $month = $i + 1;
    //ZA GODINU 2021
    $tUTF_query = "SELECT COUNT(idKorisnik) FROM korisnik 
  WHERE datumUnosa < '2021-$month-31'";
    $tUTF_result = mysqli_query($con, $tUTF_query);

    if (mysqli_num_rows($tUTF_result) > 0)
    {
        while ($tUTF_pow = mysqli_fetch_row($tUTF_result))
        {
      $tUTF_return2021 = $tUTF_pow[0];
        }
    }

    // ZA GODINU 2022
    $tUTF_query1 = "SELECT COUNT(idKorisnik) FROM korisnik WHERE datumUnosa < '2022-$month-31'";

    $tUTF_result1 = mysqli_query($con, $tUTF_query1);

    if (mysqli_num_rows($tUTF_result1) > 0)
    {
        while ($tUTF_pow1 = mysqli_fetch_row($tUTF_result1))
        {
      $tUTF_return2022 = $tUTF_pow1[0];
        }
    }

    $CurrMonth = date('m');

    if ( $CurrMonth < $month) {
      echo "['$mesec[$i]',$tUTF_return2021 , null],";
    }
    else{
      echo "['$mesec[$i]',$tUTF_return2021 ,$tUTF_return2022],";
    }
}
?>
    ]);
         var options = {
          title: 'Ukupno korisnika u bazi',
          hAxis: {title: 'Meseci'},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('userTimeChart'));
        chart.draw(data, options); 
           }  
     </script>
        
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Godina', 'Broj korisnika:'],
      <?php
        $tUF_query1 = "SELECT '2021', COUNT(idKorisnik) FROM korisnik WHERE datumUnosa LIKE '2021-%'UNION 
                 SELECT '2022', COUNT(idKorisnik) FROM korisnik WHERE datumUnosa LIKE '2022-%'";
        $tUF_result1 = mysqli_query($con, $tUF_query1);
        $resultAddedTiers = 0;
        
        while ($tUF_pow = mysqli_fetch_row($tUF_result1)){
          echo "['$tUF_pow[0]',$tUF_pow[1]], \r\n";
        }

      ?>
        ]);

        var options = {
          chart: {
            title: 'Ukupno dodatih korisnika 2021-2022',
          },
          bars: 'horizontal',
      legend: { position: "none" },
      colors: ['#FF7F50']
        };

        var chart = new google.charts.Bar(document.getElementById('totalUsersChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  </html>