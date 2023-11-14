<?php


session_start();

require_once("controllers/InfolettreController.php");
require_once("manager/dbManager.php");


$dbManager = DBManager::getInstance();
$controller = new InfolettreController($dbManager->getDBConnection());



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['email'])){
        
        $email = $_POST['email'];
        
        $data = [
            
            "courriel" => $email,
            
        ];
       

        $controller->addEmail($data);



}
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
    <link rel="stylesheet" href="./style/accueilStyle.css">
    <link rel="stylesheet" href="./style/navStyle.css">
    <title>Accueil</title>
</head>

<body>
    <!--
    <div class="preloader">
        
        <video muted autoplay loop>
            <source src="video/FREE Vaporwave Background V2 (5 Minutes).mp4" type="">
        </video>

    </div>
    -->
    
    
    <div class="first">
        <div>
            <h1 class="h1-first">Rich Ricasso Collections</h1>
        </div>
        <div>
            <div class="scroll-line"></div>
            <div class="scrollText">
                <span>S</span>
                <span>c</span>
                <span>r</span>
                <span>o</span>
                <span>l</span>
                <span>l</span>
            </div>
        </div>


    </div>
    <div id="content">
        <!--background-->

        <video muted autoplay loop>
            <source src="video/Moving Gradient Background.mp4" type="">
        </video>


        <?php require "./navTemplate.php" ?>


        <header>
        <?php require "./userParametreTemplate.php" ?>
            <div class="hero-section">

                <div class="hero-info">
                    <div class="caroussel-content">
                    <div class="gallery">
                   

                    </div>

                        <script>
                            
                        </script>
                       
                    </div>
                    <div class="info">
                        <h1 class="info-h1">Rich Ricasso Collections</h1>
                        <h2 class="info-h2">Au sommet du luxe</h2>
                        <div class="btn-voir-plus">
                            <div>
                                <span><a href="produit.php"> voir plus</a> </span>
                               <!-- <div class="fleche"></div>-->
                            </div>
                            
                        </div>
                    </div>
                </div>


            </div>

        </header>

        <main>


            <div class="rich-ricasso">
                <div class="rich-title">
                    <h1>The man behind that revolution</h1>
                </div>
                <div class="rich-info">
                    <div class="rich-img-container">
                        <img src="./img/Rich_Ricasso.png" alt="" class="rich-img">
                    </div>
                    <div class="rich-text">
                        <h3>Rich Ricasso</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum odio rerum, tempore
                            obcaecati, deleniti architecto quidem laudantium hic cum quis sed inventore fugiat possimus,
                            quas pariatur asperiores eius! Repellendus, ullam.
                            Laudantium reprehenderit suscipit odio maiores ad facere quisquam? Ducimus ullam porro,
                            omnis mollitia esse voluptatem dicta ipsa molestiae suscipit. Quisquam eum similique
                            perferendis fugit fuga fugiat tempora atque rerum cupiditate!</p>
                    </div>
                </div>
            </div>
            <div class="about-us-title-container">
                <div class="about-us-title" style="margin-left: 500px;">
                    <h1>PHARE</h1>
                    <h1>DE</h1>
                    <h1>LA</h1>
                    <h1>COLLECTION</h1>
                    <h1>D’ÉTÉ</h1>
                    <h1>EN</h1>
                    <h1>SOIE.</h1>
                </div>
                <div class="about-us-title" style="margin-left: 500px;">
                    <h1>PIECES</h1>
                    <h1>PHARE</h1>
                    <h1>DE</h1>
                    <h1>LA</h1>
                    <h1>COLLECTION</h1>
                    <h1>D’ÉTÉ</h1>
                    <h1>EN</h1>
                    <h1>SOIE.</h1>
                </div>
                <div class="about-us-title" style="margin-left: 500px;">
                    <h1>PIECES</h1>
                    <h1>PHARE</h1>
                    <h1>DE</h1>
                    <h1>LA</h1>
                    <h1>COLLECTION</h1>
                    <h1>D’ÉTÉ</h1>
                    <h1>EN</h1>
                    <h1>SOIE.</h1>
                </div>
            </div>
            <!-- fetch avec le api-->
            <div class="piece-phare">
                <div class="piece-column">
                    <div class="card-piece">
                        <img src="./img/cravate1.png" alt="" class="piece-img">
                        <h2>Chemise-1</h2>
                        <h3>95$</h3>
                    </div>
                </div>
                <div class="piece-column-2">
                    <div class="card-piece">
                        <img src="./img/cravate2.png" alt="" class="piece-img">
                        <h2>Chemise-2</h2>
                        <h3>50$</h3>
                    </div>
                    <div class="btn">
                        <h3>voir plus</h3>
                    </div>
                    <div class="card-piece">
                        <img src="./img/cravate3.png" alt="" class="piece-img">
                        <h2>Cravatte-2</h2>
                        <h3>90$</h3>
                    </div>
                </div>
                <div class="piece-column">
                    <div class="card-piece">
                        <img src="./img/cravate4.png" alt="" class="piece-img">
                        <h2>Cravatte-2</h2>
                        <h3>15$</h3>
                    </div>
                </div>
                <div class="infolettre">
                    <div>
                        <h2>Infolettre!!</h2>
                    </div>
                    <div>
                        <form action="" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                            <input type="submit" value="s'abonner" class="button-1">
                        </form>
                    </div>

                </div>

                <footer>
                    <p>Fait par Kenny et Zafer</p>
                </footer>
            </div>


        </main>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="main.js"></script>
<script src="./script/caroussel.js"></script>
<script src ="./script/gallery.js"></script>

</html>
