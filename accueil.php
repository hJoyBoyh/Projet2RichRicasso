<?php
$userImg = "img/user2.png";
session_start();
  
 
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
    <title>Accueil</title>
</head>

<body>
    
    <div class="preloader">
        <video muted autoplay loop>
            <source src="video/FREE Vaporwave Background V2 (5 Minutes).mp4" type="">
        </video>
    </div>
    
    
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
                    <?php
                    
                    $url = '/Projet2RichRicasso/api/produits'
                    ?>

                    </div>

                        <script>
                            const gallery = document.querySelector('.gallery');
                            const url = '/Projet2RichRicasso/api/produits';
                            console.log(url)
                            fetch(url)
                                .then(response => response.json())
                                .then(data => {
                                   
                                    img1 = document.createElement('img')
                                    img1.src = `${data[2].image}`
                                    img2 = document.createElement('img')
                                    img2.src = `${data[5].image}`
                                    img3 = document.createElement('img')
                                    img3.src = `${data[6].image}`
                                    img4 = document.createElement('img')
                                    img4.src = `${data[7].image}`
                                    img5 = document.createElement('img')
                                    img5.src = `${data[1].image}`
                                    img6 = document.createElement('img')
                                    img6.src = `${data[8].image}`

                                    gallery.appendChild(img1)
                                    gallery.appendChild(img2)
                                    gallery.appendChild(img3)
                                    gallery.appendChild(img4)
                                    gallery.appendChild(img5)
                                    gallery.appendChild(img6)
                                })
                                .catch(error => console.log(error))
                        </script>
                       
                    </div>
                    <div class="info">
                        <h1 class="info-h1">Rich Ricasso Collections</h1>
                        <h2 class="info-h2">Au sommet du luxe</h2>
                        <div class="btn-voir-plus">
                            <div>
                                <span> voir plus</span>
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
                        <h3 style="font-size:3em">Rich Ricasso</h3>
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
                        <h2>Restez a l affut des toutes nouvelles sorties!!</h2>
                    </div>
                    <div>
                        <form action="">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
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

</html>
<script>
    /*
  const container = document.getElementById('container');
  const url = '/Projet2RichRicasso/api/users';
  console.log(url)
  fetch(url)
  .then(response => response.json())
  .then(data => {
  console.log(data)
  nom = document.createElement('p')
  nom.innerHTML= `${data[0].nom}`
  container.appendChild(nom)
  })
  .catch(error => console.log(error))

*/

</script>