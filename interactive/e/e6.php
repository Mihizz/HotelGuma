<?php 
   $test = "btnX";
   $dis = "";
      $sql ="SELECT SUM(zauzeto) AS sum FROM mesto WHERE red = \"E\" && kolona = \"6\"";
   			
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
<button type="button" class="btn btn0 <?php echo $test?> btnE6 kockasto" data-toggle="modal" data-target="#ModalE6" >
E6
</button>
<div class="modal fade" id="ModalE6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mesto: <strong>E6</strong></h5>
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
                  //Mesto E6/2
                  $sqlE6x2 ="SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.kolicina, mesto.zauzeto FROM cuvanje 
                  	JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik
                  	JOIN mesto ON mesto.idMesto = cuvanje.idMesto
                  	WHERE mesto.mestoCelo = \"E6/2\"";
                   
                  $resultE6x2 = mysqli_query($con, $sqlE6x2);
                  if (mysqli_num_rows($resultE6x2) > 0) {
                  	while($rowE6x2 = mysqli_fetch_assoc($resultE6x2)) {
                  	echo "<tr>
                  			<td>E6/2</td>
                  			<td style=\"width:200px\">". $rowE6x2["ime"] ."-". $rowE6x2["mesto"] ."</td>
                  			<td style=\"width:200px\">". $rowE6x2["gumeCelo"] ."</td>
                  			<td>". $rowE6x2["kolicina"] ."</td>";
                  			
                  		if($rowE6x2["zauzeto"] == 4){			
                  		echo	"<td><a title=\"Ovo mesto je zauzeto\"><button class=\"btn btn-primary\"  disabled style=\"background-color: gray; border-color: gray\"<button class=\"btn btn-primary\"><strong>+</strong></button></a></td>";
                  		}
                  		else {
                  			echo "<td><a href=\"dodajNaMesto.php?red=E&kolona=6&sprat=2\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></td></tr>";
                  		}
                  		
                  	}
                  }
                  else {
                  	echo "<tr>	
                  			<td>E6/2</td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<th><a href=\"dodajNaMesto.php?red=E&kolona=6&sprat=2\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></th>
                  		  </tr>
                  			";
                  }
                  
                  //Mesto E6/1
                  $sqlE6x1 ="SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.kolicina, mesto.zauzeto FROM cuvanje 
                  	JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik
                  	JOIN mesto ON mesto.idMesto = cuvanje.idMesto
                  	WHERE mesto.mestoCelo = \"E6/1\"";
                   
                  $resultE6x1 = mysqli_query($con, $sqlE6x1);
                  if (mysqli_num_rows($resultE6x1) > 0) {
                  	while($rowE6x1 = mysqli_fetch_assoc($resultE6x1)) {
                  	echo "<tr>
                  			<td>E6/1</td>
                  			<td style=\"width:200px\">". $rowE6x1["ime"] ."-". $rowE6x1["mesto"] ."</td>
                  			<td style=\"width:200px\">". $rowE6x1["gumeCelo"] ."</td>
                  			<td>". $rowE6x1["kolicina"] ."</td>";

                  		if($rowE6x1["zauzeto"] == 4){			
                  		echo	"<td><a title=\"Ovo mesto je zauzeto\"><button class=\"btn btn-primary\"  disabled style=\"background-color: gray; border-color: gray\"<button class=\"btn btn-primary\"><strong>+</strong></button></a></td>";
                  		}
                  		else {
                  			echo "<td><a href=\"dodajNaMesto.php?red=E&kolona=6&sprat=1\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></td></tr>";
                  		}
                  	}
                  }
                  else {
                  	echo "<tr>	
                  			<td>E6/1</td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<th><a href=\"dodajNaMesto.php?red=E&kolona=6&sprat=1\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></th>
                  		  </tr>
                  			";
                  }
                  ?>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
            <a href="detaljna.php?red=E&kolona=6"><button type="button" class="btn btn-primary" <?php echo $dis ?>>Detaljno</button></a>
         </div>
      </div>
   </div>
</div>