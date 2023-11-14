<?php
require_once("controllers/UserController.php");
require_once("manager/dbManager.php");

session_start();

if (!isset($_SESSION['authentifie']) || !isset($_SESSION['user'])) {
    header("location : connexion.php");
    exit();
}
;



$dbManager = DBManager::getInstance();
$controller = new UserController($dbManager->getDBConnection());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_SESSION['user'];
    $id = $_POST['id'];

    $nom ="";
    $email ="";
    $mdp = "";

    if (isset($_POST['updateNom'])) {
        
        $nom = $_POST['nom'];
        $email = $user['courriel'];
        $mdp= $user['mdp'];
        
    }
    if (isset($_POST['updateEmail'])) {
       
        $nom = $user['nom'];
        $email = $_POST['courriel'];
        $mdp= $user['mdp'];
    }
    if (isset($_POST['updatePassword'])) {
        
        $nom = $user['nom'];
        $email = $user['courriel'];
        $mdp= $_POST['mdp'];
    }
    $data = [
        "nom" => $nom,
        "courriel" => $email,
        "mdp" => $mdp
    ];
    

    $controller->updateUser($id, $data);
    // udpate la variable user qu on a dans la session
    $_SESSION['user'] = $controller->getUserById($id);
    header("location: profil.php");
    exit;

   

    

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style/navStyle.css">
    <link rel="stylesheet" href="style/profil.css">


</head>

<body>
    <div id="content">

        <?php require "./navTemplate.php" ?>

        <header>
            <?php require "./userParametreTemplate.php" ?>

        </header>

        <main>

            <div id="content">
                <h1>Mon Compte</h1>
                <div id="parametre">
                    <div class="user-general">
                        <div class="user-name-img">
                            <img src="img/user2.png" alt="" srcset="" class="user-img">
                            <?php
                            if (isset($_SESSION['admin'])) {
                                if ($_SESSION['admin'] == true) {
                                    echo 'Admin';
                                }

                            } else {

                                echo 'Utilisateur lambda';
                            }
                            ?>

                        </div>

                        <ul id="user-choix">
                            <li id="btn-profil">Profil</li>
                            <li id="btn-compte-securite">Sécurité</li>
                        </ul>
                    </div>
                    <div id="user-display">
                        <div id="user-profil-info">
                            <?php

                            if (isset($_SESSION['authentifie']) && isset($_SESSION['user'])) {
                                $user = $_SESSION['user'];
                                echo '
        
                    <span>Nom Complet:</span>
                        <h3 id="fullName">' . $user['nom'] . '</h3>
                        
                        <span>Courriel:</span>
                        <h3 id="email">' . $user['courriel'] . '</h3>
                        ';

                            }

                            ?>


                        </div>
                        <div id="user-securite-info">
                            <h2>Update votre email et votre nom</h2>
                            <?php

                            if (isset($_SESSION['authentifie']) && isset($_SESSION['user'])) {
                                $user = $_SESSION['user'];
                                echo '
        <form action="" method="post">
            <input type="hidden" id="' . $user['id'] . '" name="id" value="' . $user['id'] . '">
            <input type="hidden" id="updateNom" name="updateNom" value="updateNom">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="nom" value="' . $user['nom'] . '">
            <input type="submit" value="Update" class="button-1">
            </form>
            <form action="" method="post">
            <input type="hidden" id="' . $user['id'] . '" name="id" value="' . $user['id'] . '">
            <input type="hidden" id="updateEmail" name="updateEmail" value="updateEmail">
            <label for="courriel">Courriel</label>
            <input type="email" id="courriel" name="courriel" placeholder="courriel" value="' . $user['courriel'] . '">
            <input type="submit" value="Update" class="button-1">
            </form>
            <form action="" method="post">
            <input type="hidden" id="' . $user['id'] . '" name="id" value="' . $user['id'] . '">
            <input type="hidden" id="updatePassword" name="updatePassword" value="updatePassword">
            <label for="MDP">Mot de passe</label>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            <input type="submit" value="Update" class="button-1">
            </form>
            
       

    ';

                            }

                            ?>

                        </div>


                    </div>
                </div>
            </div>


        </main>



    </div>

</body>
<script src="script/profilScript.js"></script>
<script src="main.js"></script>

</html>