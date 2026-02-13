<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // blocco accessi diretti
    exit;
}
//no
$email = $_SESSION['email'];

require("pdoConnection.php");

$stm = $pdo -> prepare("SELECT * FROM utenti WHERE email = :email");

$stm -> bindValue(":email", $email);

$stm -> execute();

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    $nome = $row['nome'];
    $telefono = $row['telefono'];
    echo "Email: " . $email . "<br>";
    echo "Telefono: " . $telefono . "<br>";
}

?>

<html>
<head>
  <meta charset="utf-8">
  <title>Profilo CookIt di <?php echo htmlspecialchars($nome);?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="persona">
		<p>Ciao <?php echo htmlspecialchars($nome);?></p><br>
    	<img src="fotoEs.jpg" alt="foto_profilo">
	</div>
    <ul>
    	<li>Impostazioni</li>
        <li>Account</li>
        <li>Preferiti</li>
        <li>Esci</li>
    </ul>
  	<div class="barra">
    	<a class="terzoBarra" href="DISPENSA.php">Dispensa</a>
    	<a class="terzoBarra" href="CREA.php">Crea</a>
    	<a class="terzoBarra active" href="PROFILO.php">Profilo</a>
  	</div>
</body>
</html>
