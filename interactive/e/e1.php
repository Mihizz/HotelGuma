<?php 
   $test = "btnX";
   $dis = "";
      $sql ="SELECT SUM(zauzeto) AS sum FROM mesto WHERE red = \"E\" && kolona = \"1\"";
   			
   		$result = mysqli_query($con, $sql);
   		if (mysqli_num_rows($result) > 0) {
   			while($row = mysqli_fetch_assoc($result)) {
   				if($row["sum"] == 8){			
   				$test = "btnXXX";
   				}
   				elseif ($row["sum"] >= 4){
   				$test = "btnXX";	
   				}
   				if($row["sum"] == 0){
   					$dis = "style=\"background-color: red; border-color: red;\"title=\"Na ovom mestu ne postoje gume\" disabled";
   				}
   			}
   		} ?>
<button type="button" class="btn btn0 <?php echo $test?> btnE1 kockasto" data-toggle="modal" data-target="#ModalE1" >
E1
</button>
<div class="modal fade" id="ModalE1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mesto: <strong>E1</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>Musterija</th>
                     <th>Dimenzije</th>
                     <th>Kom</th>
                     <th>Dodaj</th>
                  </tr>
               </thead>
               <?php                   
                  //Mesto E1/2
                  $sqlE1x2 ="SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.kolicina, mesto.zauzeto FROM cuvanje 
                  	JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik
                  	JOIN mesto ON mesto.idMesto = cuvanje.idMesto
                  	WHERE mesto.mestoCelo = \"E1/2\"";
                   
                  $resultE1x2 = mysqli_query($con, $sqlE1x2);
                  if (mysqli_num_rows($resultE1x2) > 0) {
                  	while($rowE1x2 = mysqli_fetch_assoc($resultE1x2)) {
                  	echo "<tr>
                  			<td>E1/2</td>
                  			<td style=\"width:200px\">". $rowE1x2["ime"] ."-". $rowE1x2["mesto"] ."</td>
                  			<td style=\"width:200px\">". $rowE1x2["gumeCelo"] ."</td>
                  			<td>". $rowE1x2["kolicina"] ."</td>";
                  			
                  		if($rowE1x2["zauzeto"] == 4){			
                  		echo	"<td><a title=\"Ovo mesto je zauzeto\"><button class=\"btn btn-primary\"  disabled style=\"background-color: gray; border-color: gray\"<button class=\"btn btn-primary\"><strong>+</strong></button></a></td>";
                  		}
                  		else {
                  			echo "<td><a href=\"dodajNaMesto.php?red=E&kolona=1&sprat=2\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></td></tr>";
                  		}
                  		
                  	}
                  }
                  else {
                  	echo "<tr>	
                  			<td>E1/2</td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<th><a href=\"dodajNaMesto.php?red=E&kolona=1&sprat=2\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></th>
                  		  </tr>
                  			";
                  }
                  
                  //Mesto E1/1
                  $sqlE1x1 ="SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.kolicina, mesto.zauzeto FROM cuvanje 
                  	JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik
                  	JOIN mesto ON mesto.idMesto = cuvanje.idMesto
                  	WHERE mesto.mestoCelo = \"E1/1\"";
                   
                  $resultE1x1 = mysqli_query($con, $sqlE1x1);
                  if (mysqli_num_rows($resultE1x1) > 0) {
                  	while($rowE1x1 = mysqli_fetch_assoc($resultE1x1)) {
                  	echo "<tr>
                  			<td>E1/1</td>
                  			<td style=\"width:200px\">". $rowE1x1["ime"] ."-". $rowE1x1["mesto"] ."</td>
                  			<td style=\"width:200px\">". $rowE1x1["gumeCelo"] ."</td>
                  			<td>". $rowE1x1["kolicina"] ."</td>";

                  		if($rowE1x1["zauzeto"] == 4){			
                  		echo	"<td><a title=\"Ovo mesto je zauzeto\"><button class=\"btn btn-primary\"  disabled style=\"background-color: gray; border-color: gray\"<button class=\"btn btn-primary\"><strong>+</strong></button></a></td>";
                  		}
                  		else {
                  			echo "<td><a href=\"dodajNaMesto.php?red=E&kolona=1&sprat=1\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></td></tr>";
                  		}
                  	}
                  }
                  else {
                  	echo "<tr>	
                  			<td>E1/1</td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<th><a href=\"dodajNaMesto.php?red=E&kolona=1&sprat=1\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></th>
                  		  </tr>
                  			";
                  }
                  ?>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
            <a href="detaljna.php?red=E&kolona=1"><button type="button" class="btn btn-primary" <?php echo $dis ?>>Detaljno</button></a>
         </div>
      </div>
   </div>
</div>