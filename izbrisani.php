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
            ><img src="logo1.png" style="padding: 10px;" alt="Logo.png" title="Povratak na pocetnu" width="190" height="85"></a>
      </div>
      <br>
      <br><br>
      <div class="container">
         <div class="row">
            <h2 class="text-center" style="font-family:Bungee">Izbrisane rezervacije</h2>
         </div>
         <div class="row">
            <div class="col-md-12">
               <?php
$sql    = "SELECT cuvanje.*, korisnikdel.ime, korisnikdel.mesto ,  mesto.mestoCelo FROM cuvanje 
                      JOIN korisnikdel ON cuvanje.idKorisnik = korisnikdel.idKorisnik
                      JOIN mesto ON mesto.idMesto = cuvanje.idMesto WHERE 1";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "
                  <table id=\"datatable\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                  <thead>
                    <tr>
                      <th>Ime</th>
                      <th>Prebivaliste</th>
                      <th title=\"sirina/profil R-dimenzija\">Dimenzije gume</th>
                      <th>DOT</th>
                      <th>Kom</th>
                      <th>Sezona</th>
                      <th>Felne</th>
                      <th title=\"red-kolona/sprat\">Mesto</th>
                      <th title=\"dan-mesec-godina\">Datum upisa</th>
                      <th>Obrisi</th>
                    </tr>
                  </thead>
                  
                  <tfoot>
                    <tr>
                      <th>Ime</th>
                      <th>Prebivaliste</th>
                      <th title=\"sirina/profil R-dimenzija\">Dimenzije gume</th>
                      <th>DOT</th>
                      <th>Kom</th>
                      <th>Sezona</th>
                      <th>Felne</th>
                      <th title=\"red-kolona/sprat\">Mesto</th>
                      <th title=\"dan-mesec-godina\">Datum upisa</th>
                      <th>Obrisi</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>";
    
    while ($roww = mysqli_fetch_assoc($result)) {
        echo "<tr id=\"" . $roww['idCuvanje'] . "\" >
                      <td>" . $roww["ime"] . "</td>
                      <td>" . $roww["mesto"] . "</td>
                      <td title=\"sirina/profil R-dimenzija\">" . $roww["gumeCelo"] . "</td>
                  <td>" . $roww["dot"] . "</td>
                      <td>" . $roww["kolicina"] . "</td>
                      <td>" . $roww["sezona"] . "</td>
                  <td>" . $roww["felna"] . "</td>
                      <td title=\"red-kolona/sprat\" style=\"text-align: center;\">" . $roww["mestoCelo"] . "</td>
                      <td title=\"dan-mesec-godina\" style=\"text-align: center;\">". $roww["datum"] ."</td>
                      <td style=\"text-align: center; vertical-align: middle;\"><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Izbrisi\"><button  data-row_id=\"58\"  class=\"btn btn-danger btn-sm remove\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span><img class=\"manImg\" src=\"iks1.ico\"></img></span></button></p></td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<h2>Baza je prazna</h2>";
}
?>  
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript">
      $(".remove").click(function(){
          var id = $(this).parents("tr").attr("id");
      
          if(confirm('Da li ste sigurni da zelite da obrisete ovaj red iz baze?'))
          {
              $.ajax({
                 url: 'deleteHotel.php',
                 type: 'GET',
                 data: {id: id},
                 error: function() {
                    alert('Brisanje nije uspelo');
                 },
                 success: function(response) {
                      $.ajax({
                 url: 'oslobodiMesto.php',
                 type: 'GET',
                 data: {id: id},
                 error: function() {
                    alert('Brisanje nije uspelo');
                 },
                 success: function(data) {
                      $("#"+id).remove();
                      alert("Red uspesno izbrisan");  
                 }
              });
        
                 }
              });
          }
      });
   </script>
</html>