<?php
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

function isAuthenticated()
{
    session_start();
    return isset($_SESSION['authentifie']); // doit être
}

if (!isAuthenticated()) {
    header('Location: connexion.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <link rel="stylesheet" href="./style/loading.css">
    <link rel="stylesheet" href="./style/navStyle.css">
    <link rel="stylesheet" href="./style/produitStyle.css">
    <title>Produit</title>
</head>

<body>
    
    <div class="preloader">
        <video muted autoplay loop>
            <source src="./video/FREE Vaporwave Background V2 (5 Minutes).mp4" type="">
        </video>
    </div>


    <div id="content">

        
        <video muted autoplay loop>
            <source src="video/Moving Gradient Background.mp4" type="">
        </video>
        <nav>
            <div class="logo nav-li">
                <h1>R</h1>
            </div>
            <li class="nav-li"> <a href="/Projet2RichRicasso/accueil.php">Accueil</a></li>
            <li class="nav-li"> <a href="/Projet2RichRicasso/produit.php">Produit</a></li>
            <img src="./img/user2.png" alt="user" class="user-icon nav-li">
        </nav>
        <header>
            <?php require "./userParametreTemplate.php" ?>
        </header>
        <main>
            <div class="produit-container">
                
                <div class="affichage-produit">
                    <div class=column></div>

                </div>
                <div class="categories">
                    <li class="categorie">Tous</li>
                    <li class="categorie">Cravatte</li>
                    <li class="categorie">Chemise</li>
                    <li class="categorie">ASC</li>
                    <li class="categorie">DESC</li>


                    <div>
                    <label for="couleur-select">Par Couleur</label>
                    <select name="couleurs" id="couleur-select">
                        <option value="">--Choisir une option--</option>
                        <option value="blanc">Blanc</option>
                        <option value="violet">Violet</option>
                        <option value="rose">Rose</option>
                        <option value="vert">Vert</option>
                        
                    </select>
                    </div>

                    <div>
                    <label for="tailles-select">Par Taille</label>
                    <select name="tailles" id="tailles-select">
                        <option value="">--Choisir une option--</option>
                        <option value="unique">Unique</option>
                        <option value="quarantequatre">44</option>
                        <option value="quarantehuit">48</option>
                        <option value="cinquantequatre">54</option>
                        <option value="cinquantesix">56 </option>
                        
                    </select>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="./script/produitManager.js"></script>
<script src="main.js"></script>
</html>