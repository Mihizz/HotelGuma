<?php
   require '../config.php'; 
   require '../auth.php'; 
?>  

<html>
   <head>
      <title>Skica hotela | Hotel Stepic</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico" />
	  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">

	  <!-- MESTA STILOVI -->
	  <link href="css/style-a.css" rel="stylesheet">
	  <link href="css/style-b.css" rel="stylesheet">
	  <link href="css/style-c.css" rel="stylesheet">
	  <link href="css/style-d.css" rel="stylesheet">
	  <link href="css/style-e.css" rel="stylesheet">
	  <link href="css/style-f.css" rel="stylesheet">
	  <link href="css/style-g.css" rel="stylesheet">
	  <link href="css/style-h.css" rel="stylesheet">
	  <link href="css/style-i.css" rel="stylesheet">
	  <link href="css/style-j.css" rel="stylesheet">
	  <link href="css/style-k.css" rel="stylesheet">
	  <link href="css/style-l.css" rel="stylesheet">
	  <link href="css/style-m.css" rel="stylesheet">
	  <link href="css/style-n.css" rel="stylesheet">
	  <link href="css/style-o.css" rel="stylesheet">

      <style>
		area {
		cursor: pointer;
		}
		
		.logo {
         float: left;
         }
		
         .logo:hover{
         background-color: #888888; 
         }
         body{
         background: url(pozadine/background7.jpg);
         background-repeat: y-repeat;
         background-size: 1920px 937px;
         }
         
		.container {
		  position: relative;
		  width: 100%;
		  max-width: 750px;
		  margin-right: 38%;
		}

		.container img {
		  width: 110%;
		  height: auto;
		  margin-left: 10%;
		}
		
		.rowLetter { 
			position: absolute;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			color: white;
			background-color: red;
			font-weight: bold;
			font-size: 20px;
			padding: 7px 15px;
			border: none;
			border-radius: 50%;
			text-align: center;
		}

		 
		.container .btn0 {
			  position: absolute;
			  transform: translate(-50%, -50%);
			  -ms-transform: translate(-50%, -50%);
			  background-color: white;
			  font-weight: bold;
			  font-size: 16px;
			  padding: 12px 24px;
			  border: none;
			  cursor: pointer;
			  border-radius: 5px;
			  text-align: center;
		}
		 
		.container .btnX {
			  color: green;
		}
		
		.container .btnXX {
			  color: blue;
		}
		.container .btnXXX {
			  color: red;
		}
		.container .rotiraj {
			padding-top:22;
			padding-bottom:22;
			padding-left:14;
			padding-right:14;
		}

		.container .kockasto {
			padding-top:10;
			padding-bottom:10;
			padding-left:10;
			padding-right:10;
		}				
		
		
		.container .btnX:hover {
			  background-color: green;
			  color: white;
		}
		
		.container .btnXX:hover {
			  background-color: blue;
			  color: white;
		}
		
		.container .btnXXX:hover {
			  background-color: red;
			  color: white;
		}
		.leg img{
			position: absolute;
			top:10;
			right: 10;
			margin-top:10px; 
			margin-right:10px;
			height: 150px;
			width: 200px;
		}
      </style>
   </head>
   <body>
      <div class="logo">
         <a href="index.php"><img class="logo" src="Logo.png" style="padding: 10px;" data-toggle="tooltip"  title="Povratak na pocetnu" alt="Logo.png"  width="190" height="85"></a>
      </div>
	  <div class="leg">
		<img src='legenda.png' title='legenda Guma' alt='legenda'/>
	  </div>
      <br> <br>  <br> <br> <br> 
      <div class="centar" style="align-content:center;text-align:center">
      <h2 class="text-center"; style="font-family:Bungee;float: center">Skica Hotela</h2>
      <br><br>
<div class="container">
    <img src='hotelSkicaBig.png' title='Skladiste Guma' alt='Skladiste Guma'/>
		<!-- AAA -->
	<button class="rowLetter btnA" disabled>A</button>
		<!-- Dugme A1 -->		 
		<?php require '../interactive/a/a1.php'; ?>
		<!-- Dugme A2 -->		 
		<?php require '../interactive/a/a2.php'; ?>
		<!-- Dugme A3 -->
		<?php require '../interactive/a/a3.php'; ?>
		<!-- Dugme A4 -->	
		<?php require '../interactive/a/a4.php'; ?>
		<!-- Dugme A5 -->		 
		<?php require '../interactive/a/a5.php'; ?>
		<!-- Dugme A6 -->
		<?php require '../interactive/a/a6.php'; ?>
		<!-- Dugme A7 -->	
		<?php require '../interactive/a/a7.php'; ?>
		<!-- Dugme A8 -->	
		<?php require '../interactive/a/a8.php'; ?>	


	<!-- BBB -->
	<button class="rowLetter btnB" disabled>B</button>
		<!-- Dugme B1 -->		 
		<?php require '../interactive/b/b1.php'; ?>
		<!-- Dugme B2 -->		 
		<?php require '../interactive/b/b2.php'; ?>
		<!-- Dugme B3 -->
		<?php require '../interactive/b/b3.php'; ?>
		<!-- Dugme B4 -->	
		<?php require '../interactive/b/b4.php'; ?>
		<!-- Dugme B5 -->		 
		<?php require '../interactive/b/b5.php'; ?>
		<!-- Dugme B6 -->
		<?php require '../interactive/b/b6.php'; ?>
		<!-- Dugme B7 -->	
		<?php require '../interactive/b/b7.php'; ?>
		<!-- Dugme B8 -->	
		<?php require '../interactive/b/b8.php'; ?>		

		<!-- CCC -->
	<button class="rowLetter btnC" disabled>C</button>
		<!-- Dugme C0 -->		 
		<?php require '../interactive/c/c0.php'; ?>	
		<!-- Dugme C1 -->		 
		<?php require '../interactive/c/c1.php'; ?>
		<!-- Dugme C2 -->		 
		<?php require '../interactive/c/c2.php'; ?>
		<!-- Dugme C3 -->
		<?php require '../interactive/c/c3.php'; ?>
		<!-- Dugme C4 -->	
		<?php require '../interactive/c/c4.php'; ?>
		<!-- Dugme C5 -->		 
		<?php require '../interactive/c/c5.php'; ?>
		<!-- Dugme C6 -->
		<?php require '../interactive/c/c6.php'; ?>
		<!-- Dugme C7 -->	
		<?php require '../interactive/c/c7.php'; ?>
		
	<!-- DDD -->
	<button class="rowLetter btnD" disabled>D</button>
		<!-- Dugme D1 -->		 
		<?php require '../interactive/d/d1.php'; ?>
		<!-- Dugme D2 -->		 
		<?php require '../interactive/d/d2.php'; ?>
		<!-- Dugme D3 -->
		<?php require '../interactive/d/d3.php'; ?>
		<!-- Dugme D4 -->	
		<?php require '../interactive/d/d4.php'; ?>
		<!-- Dugme D5 -->		 
		<?php require '../interactive/d/d5.php'; ?>
		<!-- Dugme D6 -->
		<?php require '../interactive/d/d6.php'; ?>
		<!-- Dugme D7 -->	
		<?php require '../interactive/d/d7.php'; ?>

	<!-- EEE -->
	<button class="rowLetter btnE" disabled>E</button>
		<!-- Dugme E0 -->		 
		<?php require '../interactive/e/e0.php'; ?>	
		<!-- Dugme E1 -->		 
		<?php require '../interactive/e/e1.php'; ?>
		<!-- Dugme E2 -->		 
		<?php require '../interactive/e/e2.php'; ?>
		<!-- Dugme E3 -->
		<?php require '../interactive/e/e3.php'; ?>
		<!-- Dugme E4 -->	
		<?php require '../interactive/e/e4.php'; ?>
		<!-- Dugme E5 -->		 
		<?php require '../interactive/e/e5.php'; ?>
		<!-- Dugme E6 -->
		<?php require '../interactive/e/e6.php'; ?>

	<!-- FFF -->
	<button class="rowLetter btnF" disabled>F</button>
		<!-- Dugme F0 -->		 
		<?php require '../interactive/f/f0.php'; ?>	
		<!-- Dugme F1 -->		 
		<?php require '../interactive/f/f1.php'; ?>
		<!-- Dugme F2 -->		 
		<?php require '../interactive/f/f2.php'; ?>
		<!-- Dugme F3 -->
		<?php require '../interactive/f/f3.php'; ?>
		<!-- Dugme F4 -->	
		<?php require '../interactive/f/f4.php'; ?>
		<!-- Dugme F5 -->		 
		<?php require '../interactive/f/f5.php'; ?>
		<!-- Dugme F6 -->
		<?php require '../interactive/f/f6.php'; ?>
		<!-- Dugme F7 -->		 
		<?php require '../interactive/f/f7.php'; ?>

	<!-- GGG -->
	<button class="rowLetter btnG" disabled>G</button>
		<!-- Dugme G1 -->		 
		<?php require '../interactive/g/g1.php'; ?>
		<!-- Dugme G2 -->		 
		<?php require '../interactive/g/g2.php'; ?>
		<!-- Dugme G3 -->
		<?php require '../interactive/g/g3.php'; ?>
		<!-- Dugme G4 -->	
		<?php require '../interactive/g/g4.php'; ?>
		<!-- Dugme G5 -->		 
		<?php require '../interactive/g/g5.php'; ?>
		<!-- Dugme G7 -->		 
		<?php require '../interactive/g/g7.php'; ?>
		<!-- Dugme G8 -->
		<?php require '../interactive/g/g8.php'; ?>

	<!-- HHH -->
	<button class="rowLetter btnH" disabled>H</button>
		<!-- Dugme H0 -->		 
		<?php require '../interactive/h/h0.php'; ?>	
		<!-- Dugme H1 -->		 
		<?php require '../interactive/h/h1.php'; ?>
		<!-- Dugme H2 -->		 
		<?php require '../interactive/h/h2.php'; ?>
		<!-- Dugme H3 -->
		<?php require '../interactive/h/h3.php'; ?>
		<!-- Dugme H4 -->	
		<?php require '../interactive/h/h4.php'; ?>
		<!-- Dugme H5 -->		 
		<?php require '../interactive/h/h5.php'; ?>
		<!-- Dugme H6 -->
		<?php require '../interactive/h/h6.php'; ?>
		<!-- Dugme H7 -->		 
		<?php require '../interactive/h/h7.php'; ?>

		<!-- III -->
	<button class="rowLetter btnI" disabled>I</button>
		<!-- Dugme I0 -->		 
		<?php require '../interactive/i/i0.php'; ?>	
		<!-- Dugme I1 -->		 
		<?php require '../interactive/i/i1.php'; ?>
		<!-- Dugme I2 -->		 
		<?php require '../interactive/i/i2.php'; ?>
		<!-- Dugme I3 -->
		<?php require '../interactive/i/i3.php'; ?>
		<!-- Dugme I4 -->	
		<?php require '../interactive/i/i4.php'; ?>
		<!-- Dugme I5 -->		 
		<?php require '../interactive/i/i5.php'; ?>
		<!-- Dugme I6 -->
		<?php require '../interactive/i/i6.php'; ?>
		<!-- Dugme I7 -->		 
		<?php require '../interactive/i/i7.php'; ?>

	<!-- JJJ -->
	<button class="rowLetter btnJ" disabled>J</button>
		<!-- Dugme J1 -->		 
		<?php require '../interactive/j/j1.php'; ?>
		<!-- Dugme J2 -->		 
		<?php require '../interactive/j/j2.php'; ?>
		<!-- Dugme J3 -->
		<?php require '../interactive/j/j3.php'; ?>
		<!-- Dugme J4 -->	
		<?php require '../interactive/j/j4.php'; ?>
		<!-- Dugme J5 -->		 
		<?php require '../interactive/j/j5.php'; ?>
		<!-- Dugme J7 -->		 
		<?php require '../interactive/j/j7.php'; ?>
		<!-- Dugme J8 -->
		<?php require '../interactive/j/j8.php'; ?>

	<!-- KKK -->
	<button class="rowLetter btnK" disabled>K</button>
		<!-- Dugme K1 -->		 
		<?php require '../interactive/k/k1.php'; ?>
		<!-- Dugme K2 -->		 
		<?php require '../interactive/k/k2.php'; ?>
		<!-- Dugme K3 -->
		<?php require '../interactive/k/k3.php'; ?>
		<!-- Dugme K4 -->	
		<?php require '../interactive/k/k4.php'; ?>
		<!-- Dugme K5 -->		 
		<?php require '../interactive/k/k5.php'; ?>
		<!-- Dugme K6 -->
		<?php require '../interactive/k/k6.php'; ?>
		<!-- Dugme K7 -->		 
		<?php require '../interactive/k/k7.php'; ?>

	<!-- LLL -->
	<button class="rowLetter btnL" disabled>L</button>
		<!-- Dugme L1 -->		 
		<?php require '../interactive/l/l1.php'; ?>
		<!-- Dugme L2 -->		 
		<?php require '../interactive/l/l2.php'; ?>
		<!-- Dugme L3 -->
		<?php require '../interactive/l/l3.php'; ?>
		<!-- Dugme L4 -->	
		<?php require '../interactive/l/l4.php'; ?>
		<!-- Dugme L5 -->		 
		<?php require '../interactive/l/l5.php'; ?>
		<!-- Dugme L6 -->
		<?php require '../interactive/l/l6.php'; ?>
		<!-- Dugme L7 -->		 
		<?php require '../interactive/l/l7.php'; ?>
		<!-- Dugme L8 -->
		<?php require '../interactive/l/l8.php'; ?>
		<!-- Dugme L9 -->		 
		<?php require '../interactive/l/l9.php'; ?>
		<!-- Dugme L10 -->
		<?php require '../interactive/l/l10.php'; ?>	

	<!-- MMM -->
	<button class="rowLetter btnM" disabled>M</button>
		<!-- Dugme M1 -->		 
		<?php require '../interactive/m/m1.php'; ?>
		<!-- Dugme M2 -->		 
		<?php require '../interactive/m/m2.php'; ?>
		<!-- Dugme M3 -->
		<?php require '../interactive/m/m3.php'; ?>
		<!-- Dugme M4 -->	
		<?php require '../interactive/m/m4.php'; ?>
		<!-- Dugme M5 -->		 
		<?php require '../interactive/m/m5.php'; ?>
		<!-- Dugme M6 -->
		<?php require '../interactive/m/m6.php'; ?>
		<!-- Dugme M7 -->		 
		<?php require '../interactive/m/m7.php'; ?>
		<!-- Dugme M8 -->
		<?php require '../interactive/m/m8.php'; ?>
		<!-- Dugme M9 -->		 
		<?php require '../interactive/m/m9.php'; ?>
		<!-- Dugme M10 -->
		<?php require '../interactive/m/m10.php'; ?>	

	<!-- NNN -->
	<button class="rowLetter btnN" disabled>N</button>
		<!-- Dugme N1 -->		 
		<?php require '../interactive/n/n1.php'; ?>
		<!-- Dugme N2 -->		 
		<?php require '../interactive/n/n2.php'; ?>
		<!-- Dugme N3 -->
		<?php require '../interactive/n/n3.php'; ?>
		<!-- Dugme N4 -->	
		<?php require '../interactive/n/n4.php'; ?>
		<!-- Dugme N5 -->		 
		<?php require '../interactive/n/n5.php'; ?>

	<!-- OOO -->
	<button class="rowLetter btnO" disabled>O</button>
		<!-- Dugme O1 -->		 
		<?php require '../interactive/o/o1.php'; ?>
		<!-- Dugme O2 -->		 
		<?php require '../interactive/o/o2.php'; ?>
		<!-- Dugme O3 -->
		<?php require '../interactive/o/o3.php'; ?>
		<!-- Dugme O4 -->	
		<?php require '../interactive/o/o4.php'; ?>
		<!-- Dugme O5 -->		 
		<?php require '../interactive/o/o5.php'; ?>	
</div>
	  <br>
	  
   </body>
</html>