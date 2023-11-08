<?php
require_once("controllers/UserController.php");
require_once("manager/dbManager.php");

$dbManager = DBManager::getInstance();
$controller = new UserController($dbManager->getDBConnection());

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom = $_POST['nom'];
    $email = $_POST['courriel'];
    $password = $_POST['mdp'];
    //$role = $_POST['role'];

    $data = [
        "nom" => $nom,
        "courriel"=> $email,
        "mdp"=> $password,
        "permission" => 0
    ];

    $controller->createUser($data);
    header("location: connexion.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style/inscription.css">

</head>
<body>
    <div class="logo">
        <h1>Rich Ricasso</h1>
    </div>
    <div class="container">
        <h2>Inscription</h2>
        <form action="" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="courriel">Courriel:</label>
            <input type="email" id="courriel" name="courriel" required>

            <label for="mdp">Mot de passe:</label>
            <input type="password" id="mdp" name="mdp" required>

            <input type="submit" value="S'inscrire" class="button-1">
            <p>Vous avez déja un compte? <a href="./connexion.php">Se Connecter</a></p>
        </form>
    </div>
</body>
</html>