<?php

session_start();
//session_unset();
//session_destroy();

require_once("controllers/LoginController.php");
require_once("manager/dbManager.php");


$dbManager = DBManager::getInstance();
$controller = new LoginController($dbManager->getDBConnection());



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['courriel']) && isset($_POST['mdp'])){
        
        $email = $_POST['courriel'];
        $password = $_POST['mdp'];

        $controller->login($email, $password);


}
}

if (isset($_SESSION["authentifie"]) && $_SESSION['authentifie'] === true) {
  
    header("location: accueil.php");
   exit;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./style/inscription.css">

</head>
<body>
    <div class="logo">
        <h1>Rich Ricasso</h1>
    </div>
    <div class="container">
        <h2>Connexion</h2>
        <form action="" method="post">

            <label for="courriel">Courriel:</label>
            <input type="email" id="courriel" name="courriel" required>

            <label for="mdp">Mot de passe:</label>
            <input type="password" id="mdp" name="mdp" required>

            <input type="submit" value="Connecter" class="button-1">
            <p>Vous n'avez pas de compte? <a href="./inscription.php">S'inscrire</a></p>
        </form>
    </div>
</body>
</html>