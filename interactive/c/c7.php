<?php 
   $test = "btnX";
   $dis = "";
      $sql ="SELECT SUM(zauzeto) AS sum FROM mesto WHERE red = \"C\" && kolona = \"7\"";
   			
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
<button type="button" class="btn btn0 <?php echo $test?> btnC7 kockasto" data-toggle="modal" data-target="#ModalC7" >
C7
</button>
<div class="modal fade" id="ModalC7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mesto: <strong>C7</strong></h5>
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
                  //Mesto C7/2
                  $sqlC7x2 ="SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.kolicina, mesto.zauzeto FROM cuvanje 
                  	JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik
                  	JOIN mesto ON mesto.idMesto = cuvanje.idMesto
                  	WHERE mesto.mestoCelo = \"C7/2\"";
                   
                  $resultC7x2 = mysqli_query($con, $sqlC7x2);
                  if (mysqli_num_rows($resultC7x2) > 0) {
                  	while($rowC7x2 = mysqli_fetch_assoc($resultC7x2)) {
                  	echo "<tr>
                  			<td>C7/2</td>
                  			<td style=\"width:200px\">". $rowC7x2["ime"] ."-". $rowC7x2["mesto"] ."</td>
                  			<td style=\"width:200px\">". $rowC7x2["gumeCelo"] ."</td>
                  			<td>". $rowC7x2["kolicina"] ."</td>";
                  			
                  		if($rowC7x2["zauzeto"] == 4){			
                  		echo	"<td><a title=\"Ovo mesto je zauzeto\"><button class=\"btn btn-primary\"  disabled style=\"background-color: gray; border-color: gray\"<button class=\"btn btn-primary\"><strong>+</strong></button></a></td>";
                  		}
                  		else {
                  			echo "<td><a href=\"dodajNaMesto.php?red=C&kolona=7&sprat=2\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></td></tr>";
                  		}
                  		
                  	}
                  }
                  else {
                  	echo "<tr>	
                  			<td>C7/2</td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<th><a href=\"dodajNaMesto.php?red=C&kolona=7&sprat=2\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></th>
                  		  </tr>
                  			";
                  }
                  
                  //Mesto C7/1
                  $sqlC7x1 ="SELECT korisnik.ime, korisnik.mesto, cuvanje.gumeCelo, cuvanje.kolicina, mesto.zauzeto FROM cuvanje 
                  	JOIN korisnik ON korisnik.idKorisnik = cuvanje.idKorisnik
                  	JOIN mesto ON mesto.idMesto = cuvanje.idMesto
                  	WHERE mesto.mestoCelo = \"C7/1\"";
                   
                  $resultC7x1 = mysqli_query($con, $sqlC7x1);
                  if (mysqli_num_rows($resultC7x1) > 0) {
                  	while($rowC7x1 = mysqli_fetch_assoc($resultC7x1)) {
                  	echo "<tr>
                  			<td>C7/1</td>
                  			<td style=\"width:200px\">". $rowC7x1["ime"] ."-". $rowC7x1["mesto"] ."</td>
                  			<td style=\"width:200px\">". $rowC7x1["gumeCelo"] ."</td>
                  			<td>". $rowC7x1["kolicina"] ."</td>";

                  		if($rowC7x1["zauzeto"] == 4){			
                  		echo	"<td><a title=\"Ovo mesto je zauzeto\"><button class=\"btn btn-primary\"  disabled style=\"background-color: gray; border-color: gray\"<button class=\"btn btn-primary\"><strong>+</strong></button></a></td>";
                  		}
                  		else {
                  			echo "<td><a href=\"dodajNaMesto.php?red=C&kolona=7&sprat=1\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></td></tr>";
                  		}
                  	}
                  }
                  else {
                  	echo "<tr>	
                  			<td>C7/1</td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<td><center>- - -</center></td>
                  			<th><a href=\"dodajNaMesto.php?red=C&kolona=7&sprat=1\"><button class=\"btn btn-primary\"><strong>+</strong></button></a></th>
                  		  </tr>
                  			";
                  }
                  ?>
            </table>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
            <a href="detaljna.php?red=C&kolona=7"><button type="button" class="btn btn-primary" <?php echo $dis ?>>Detaljno</button></a>
         </div>
      </div>
   </div>
</div>