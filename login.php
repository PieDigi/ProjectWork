<?php
	session_start();

    function controllaCredenziali($email, $password){
        require("pdoConnection.php");

        $stm = $pdo -> prepare("SELECT * FROM utenti WHERE email = :email");


        $stm -> bindValue(":email", $email);
        
        $stm -> execute();

        $rows = $stm -> fetchAll();
        
        if(isset($rows) && count($rows)==1){
            $pwdb = $rows[0]["password"];
        }else return false;

        //print_r($rows);

        if (password_verify($password, $pwdb)){
            return true;
        }
        return false;
    }
    
    function vai(){
    	$_SESSION['email'] = $_POST["email"];
    	header("location: PROFILO.php");
        exit();
    }
    
    //logout
    $logoutEffettuato = false;
    if(isset($_POST["logout"])){
        setcookie("login","",time()-365);
        $logoutEffettuato = true;
    }
   
    //se esiste gia il cookie
    else if(isset($_COOKIE["login"]) && !$logoutEffettuato){
        vai();
    }
   
    //login
    else if(isset($_POST["invio"])){

        if(controllaCredenziali($_POST["email"], $_POST["password"])){
            if(isset($_POST["resta"])){
                setcookie("login",$_POST["email"], time() + (7*24*60*60));
            }
            vai();
        }else{
            $messaggio = "Email o password non corrette.";
        	$tipoMessaggio = "error";
        }
    }
?>

<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mobile Login | CookIt</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="login-container" id="loginBox">
        <h2>LOGIN</h2>
        
        <form id="loginForm" action="" method="post">
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" id="invio"name="invio" class="btn btn-login">ACCEDI</button>
        </form>

        <div id="message" class="<?= $tipoMessaggio ?>">
            <?= htmlspecialchars($messaggio) ?>
        </div>

        <button class="btn btn-register" onclick="window.location.href='registrati.php'">
            Non hai un account? <strong>Registrati</strong>
        </button>
    </div>
</body>
</html>
