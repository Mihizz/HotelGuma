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
      <title>Hotel Guma Stepic- Baza Podataka</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
	  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <script>
         $(document).ready(function() {
             $('#datatable').dataTable();
             
         $("[data-toggle=tooltip]").tooltip();}
         )
      </script>
      <style>
         img:hover {
         background-color: #888888; 
         }
         .logo {
         float: left;
         }
         .pagination>li {
         display: inline;
         padding:0px !important;
         margin:0px !important;
         border:none !important;
         }
         .modal-backdrop {
         z-index: -1 !important;
         }
         /*
         Fix to show in full screen demo
         */
         iframe
         {
         height:700px !important;
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
         background: #428bca !important;
         border-color: #357ebd !important;
         box-shadow:none !important;
         }
         .btn-danger {
         color: #fff !important;
         background: #d9534f !important;
         border-color: #d9534f !important;
         box-shadow:none !important;
         }
		 .table-striped>tbody>tr:nth-child(even)>td,.table-striped>tbody>tr:nth-child(even)>th {
  background-color: #D7F5FF;
}

		body{
	background: url(pozadine/background7.jpg);
	background-repeat: repeat-y;
	background-size: 1920px 937px;
}
		 thead, tfoot {
		 background: white;
		 }
      </style>
   </head>
   <body>
      <div class="logo">
         <a href="index.php" 
            ><img src="Logo.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="250" height="115"></a>
      </div>
      <div style="height: 100px;"></div>
      <div class="container">
         <div class="row">
            <h2 class="text-center" style="font-family:Bungee;">Slobodna mesta u bazi</h2>
         </div><br>
         <div class="row">
            <div class="col-md-12">
               <?php
                  $sql = "SELECT red, kolona, sprat, mestoCelo,zauzeto FROM mesto 
                  		 WHERE zauzeto < 4";   
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  echo "
                  <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                     				<thead>
                  					<tr>
                  						<th>Red</th>
                  						<th>Kolona</th>
                  						<th>Sprat</th>
										<th>Mesto</th>
										<th>Zauzeto</th>
                              <th>Dodaj gume</th>
                  					</tr>
                  				</thead>
                  
                  				<tfoot>
                  					<tr>
										<th>Red</th>
                  						<th>Kolona</th>
                  						<th>Sprat</th>
										<th>Mesto</th>
										<th>Zauzeto</th>
                              <th>Dodaj gume</th>
                  					</tr>
                  				</tfoot>
                  				<tbody>";
                  
                  				while($roww = mysqli_fetch_assoc($result)) {
                  		echo "<tr>
                  		<td>". $roww["red"]. "</td>
                  		<td>" . $roww["kolona"] . "</td>
                  		<td>". $roww["sprat"]. "</td>
						<td style=\"background-color:#D6FFF5\">". $roww["mestoCelo"]. "</td>
						<td>". $roww["zauzeto"]. "</td>
                  <td><center><a href=\"dodajNaMesto.php?red=". $roww["red"]. "&kolona=" . $roww["kolona"] . "&sprat=". $roww["sprat"]. "\">
                  <button class=\"btn btn-primary\"><strong>+</strong></button></a></center></td>";
                  		}                
                  			echo "</tbody></table>";
                  } else {
                  	echo "<h2>Baza je prazna</h2>";
                  }
                  ?>	
            </div>
         </div>
      </div><br>
   </body>

</html>
