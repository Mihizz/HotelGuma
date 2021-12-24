<?php
	session_start();
	// ako korisnik nije ulogovan vrati ga na index
	if(!isset($_SESSION["user_id"])){
		exit(header("Location: ./login.php"));
	}
?>