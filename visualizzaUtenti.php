<?php

$conn = new mysqli("localhost", "pietronline", "my_pietronline");

if ($conn->connect_error) { //->connect_error
  	die("Connessione fallita: " . $conn->connect_error);
}else{
	echo "Connessione riuscita!<br><br>";
}
$conn->select_db("my_pietronline");
$sql = "CREATE TABLE IF NOT EXISTS tabella1(
			ID INT(5) AUTO_INCREMENT PRIMARY KEY,
            variabile1 VARCHAR(50) NOT NULL
        );";
if (mysqli_query($conn, $sql)) {
  	echo "Azione eseguita con successo<br>";
} else {
  	echo "Errore: " . mysqli_error($conn);
}
    $sql = "SELECT * FROM utenti";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"] . " - Password: " . $row["password"] . "<br>";
        }
    } else {
        echo "Nessun risultato";
	}

?>