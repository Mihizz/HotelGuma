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
      <title>Hotel Guma Stepic- Kupci</title>
      <link rel="shortcut icon" type="image/x-icon" href="ikonica.ico"/>
	  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
      <script> 
	  // sortiranje i pretraga
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
         thead, tfoot {
         background: white;
         }
         body{
         background: url(pozadine/background7.jpg);
         background-repeat: repeat-y;
         background-size: 1920px 937px;
         }
      </style>
   </head>
   <body>
	<!-- logo -->
      <div class="logo">
         <a href="index.php" 
            ><img src="Logo.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="240" height="110"></a>
      </div>
      <br>
	<!-- unesi korisnika -->
      <a href="unesiKorisnika.php"
      <button type="button" class="btn btn-primary btn-lg" title="Unesi novog korisnika u bazu" style=" font-size:25px; color:#4CAF50;float: right; margin-right:20px;">Unesi korisnika</button></a>
      <br><br>
      <div class="container">
         <div class="row">
            <h2 class="text-center"; style="font-family:Bungee;">Baza Korisnika</h2>
         </div>
         <div class="row">
            <div class="col-md-12">
               <?php
                  $sql = "SELECT * FROM korisnik WHERE 1";   
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  echo "
                  <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                     				<thead>
                  					<tr>
                  						<th>Ime</th>
                  						<th>Selo</th>
                                                 <th>Izmeni</th>
                                                  <th>Obrisi</th>
                  					</tr>
                  				</thead>
                  
                  				<tfoot>
                  					<tr>
                  						<th>Ime</th>
                  						<th>Selo</th>
                                                 <th>Izmeni</th>
                                                  <th>Obrisi</th>
                  					</tr>
                  				</tfoot>
                  				<tbody>";
                  
                  				while($roww = mysqli_fetch_assoc($result)) {
                  		echo "<tr id=\"". $roww['idKorisnik']. "\" ><td>". $roww["ime"]. "</td><td>" . $roww["mesto"] . "</td>
                  		<td style=\"text-align: center; vertical-align: middle;\"><p data-placement=\"top\" title=\"Izmeni podatke o korisniku\"><a href=\"update.php?id=". $roww['idKorisnik']. "\"><button class=\"btn btn-primary \" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a></p></td>
                  		<td style=\"text-align: center; vertical-align: middle;\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Izbrisi korisnika\"><button  data-row_id=\"58\"  class=\"btn btn-danger btn-sm remove\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span><img class=\"manImg\" src=\"iks1.ico\"></img></span></button></p></td></tr>";
                  	}                
                  			echo "</tbody></table>";
                  } else {
                  	echo "Baza je prazna";
                  }
                  ?><br><br>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript">
      $(".remove").click(function(){
          var id = $(this).parents("tr").attr("id");
      
      
      
          if(confirm('Da li ste sigurni da zelite da obrisete korisnika?'))
          {
              $.ajax({
                 url: '../delete.php',
                 type: 'GET',
                 data: {id: id},
                 error: function() {
                    alert('Brisanje nije uspelo\n -> Obrisi prvo sve gume iz baze');
                 },
                 success: function(data) {
                      $("#"+id).remove();
                      alert("Korisnik uspesno izbrisan");  
                 }
              });
          }
      });
   </script>
</html>