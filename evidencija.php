<?php
   require 'config.php'; 
   require 'auth.php';
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
      <title>Evidencija | Hotel Stepic</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
      <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <script>
         $(document).ready(function() {
             $('#datatable').dataTable();
             
         $("[data-toggle=tooltip]").tooltip();}
         )
      </script>
	  <script>
		function testiranje() {
		$('#datatable').dataTable({
		"order": [[ 0, "desc" ]],
		"bDestroy": true
		});
		}
		</script>
		<script>
		window.onload=function(){
		  document.getElementById("model").click();
		};
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
		 
		  .container1 {
			margin-left: 5%;
			margin-right: 5%;
		  }
		
		 @media screen and (min-width: 1600px) {
			.container1 {
			margin-left: 10%;
			margin-right: 10%;
		  }
		}
		 
		 @media screen and (max-width: 1200px) {
			th, td {
			font-size: 12px;
			}
		}
		
		@media screen and (max-width: 1040px) {
			th, td {
			font-size: 10px;
			}
		}
      </style>
   </head>
   <body>
   
      <div class="logo">
         <a href="index.php" 
            ><img src="Logo.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="190" height="85"></a>
      </div>
      <br>
      <br><br>
      <div class="container1">
         <div class="row">
            <h2 class="text-center" style="font-family:Bungee">EVIDENCIJA</h2>
         </div>
         <div class="row">
            <div class="col-md-12">
               <?php
$sql    = "SELECT * FROM evidencija";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "
                  <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\ \">
                  <thead>
                    <tr>
					  <th id=\"model\">ID</th>
                      <th>Musterija</th>
                      <th title=\"sirina/profil R-dimenzija\">Dimenzije gume</th>
                      <th>DOT</th>
                      <th>Dub. šare</th>
                      <th>Kom</th>
                      <th>Sezona</th>
                      <th>Felne</th>
                      <th title=\"red-kolona/sprat\">Mesto</th>
                      <th title=\"dan-mesec-godina\">Datum upisa</th>
                      <th title=\"godina-mesec-dan\">Datum dodavanja</th>
                      <th>Tip izmene</th>
                    </tr>
                  </thead>
                  
                  <tfoot>
                    <tr>
					<th data-field=\"id\">ID</th>
                      <th>Musterija</th>
                      <th title=\"sirina/profil R-dimenzija\">Dimenzije gume</th>
                      <th>DOT</th>
                      <th>Dub. šare</th>
                      <th>Kom</th>
                      <th>Sezona</th>                      
                      <th>Felne</th>
                      <th title=\"red-kolona/sprat\">Mesto</th>
                      <th title=\"dan-mesec-godina\">Datum upisa</th>
                      <th title=\"godina-mesec-dan\">Datum dodavanja</th>
                      <th>Tip izmene</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>
				  ";
				  
    
    while ($roww = mysqli_fetch_assoc($result)) {
        echo "<tr>
						<td data-field=\"id\">" . $roww["idEvidencija"]. "</td>
                      <td>" . $roww["musterija"]. "</td>
                      <td title=\"sirina/profil R-dimenzija\">" . $roww["gumaCelo"] . "</td>
                  <td>" . $roww["dot"] . "</td>
                  <td>" . $roww["dubinaSare"] . "mm</td>
                      <td>" . $roww["kolicina"] . " kom</td>
                      <td>" . $roww["sezona"] . "</td>                      
                  <td>" . $roww["felna"] . "</td>
                      <td title=\"red-kolona/sprat\" style=\"text-align: center;\">" . $roww["mesto"] . "</td>
                      <td title=\"dan-mesec-godina\" style=\"text-align: center;\">". $roww["datum"] ."</td>
					  <td title=\"godina-mesec-dan\" style=\"text-align: center;\">". $roww["datumIzmene"] ."</td>
					  <td style=\"background-color:";
						if($roww["tipIzmene"] == "OBRISANO"){echo "red";}
					elseif($roww["tipIzmene"] == "DODATO"){echo "LawnGreen";}
					else{echo "#CCCC00";}
					  echo ";text-align: center;font-weight:bold;\">" . $roww["tipIzmene"] . "</td></tr>
                      ";
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