<?php
require_once("controllers/UserController.php");
require_once("manager/dbManager.php");

session_start();

if(!isset($_SESSION['authentifie']) || !isset($_SESSION['user'])){
    header("location : connexion.php");
    exit();
};



$dbManager = DBManager::getInstance();
$controller = new UserController($dbManager->getDBConnection());

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email = $_POST['courriel'];
    
    //$role = $_POST['role'];

    $data = [
        "nom" => $nom,
        "courriel"=> $email,
    ];
    print_r($data);

    $controller->updateUser($id,$data);
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
    <title>Document</title>
    <link rel="stylesheet" href="style/navStyle.css">
    <link rel="stylesheet" href="style/profilStyle.css">
    
   
</head>
<body>
    <div id="content">

    <?php require "./navTemplate.php" ?>
    
    <header>
    <?php require "./userParametreTemplate.php" ?>

    </header>
   
    <main>
   
    <h1> Mon profil </h1>


    <div id="container">
        <?php
        if (isset($_SESSION['authentifie']) && isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        echo '
        <form action="" method="post">
            <input type="hidden" id="'. $user['id'] .'" name="id" value="'. $user['id'] .'">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="nom" value="'. $user['nom'] . '">
            <label for="courriel">Courriel</label>
            <input type="email" id="courriel" name="courriel" placeholder="courriel" value="'. $user['courriel'] . '">
            <input type="submit" value="Update" class="button-1">
            
       </form>
    ';
        }
        ?>
    </div>
   
        
    </main>
    
    

    </div>
    
</body>
<script src="main.js"></script>
</html>