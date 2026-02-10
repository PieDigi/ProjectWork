<?php
//--COSTRUZIONE OGGETTO PDO A SEGUITO DI CONNESSIONE AL DB
// Questo frammento di codice appartiene al file db_connect.php da richiedere nello script principale

	// CONNESSIONE NEL COSTRUTTORE
	try {
		$hostname="localhost";
		$dbname="my_pietronline";
		$user="pietronline";
		$pass="";

		$pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);
		
	// GESTIONE DELLE ECCEZIONI
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
		
	// CONTROLLO DEGLI ERRORI DI CONNESSIONE DOVUTI AI DATI DI AUTENTICAZIONE
	if(!$pdo) {
		echo ("Errore: username o password di connessione al DB errati!");
	
	}
	
?>
