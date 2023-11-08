<?php
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

function isAuthenticated() {
    session_start();
    return isset($_SESSION['authentifie']);// doit être
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
<!--
    <div class="preloader">
        <video muted autoplay loop>
            <source src="./video/FREE Vaporwave Background V2 (5 Minutes).mp4" type="">
        </video>
    </div>
-->

    <div id="content">

        <!--
        <video muted autoplay loop>
            <source src="video/Moving Gradient Background.mp4" type="">
        </video>
-->
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
                <div class="categories">
                    <li>Tous(3)</li>
                    <li>Cravatte(1)</li>
                    <li>Chemise(1)</li>
                </div>
                <div class="affichage-produit">
                    
                </div>

                <script>
                    const affichageProduit = document.querySelector('.affichage-produit');
                    const url = '/Projet2RichRicasso/api/produits';
                    console.log(url)


                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            count = 0
                            column1 = document.createElement('div')
                            column2 = document.createElement('div')
                            column3 = document.createElement('div')

                            column1.classList.add("column")
                            column2.classList.add("column")
                            column3.classList.add("column")

                            data.forEach(element => {
                                if (count < 3){
                                cardProduit =document.createElement('div')
                                cardProduit.classList.add('card-produit')
                                
                                imgProduit=document.createElement('img')
                                imgProduit.src = `${element.image}`
                                imgProduit.classList.add("piece-img")

                                titleProduit=document.createElement('h2')
                                titleProduit.innerHTML = `${element.type}`

                                couleurDispo=document.createElement('h3')
                                couleurDispo.innerHTML = `${element.couleur}`

                                prixProduit=document.createElement('h4')
                                prixProduit.innerHTML = `${element.prix}`

                                cardProduit.appendChild(imgProduit)
                                cardProduit.appendChild(titleProduit)
                                cardProduit.appendChild(couleurDispo)
                                cardProduit.appendChild(prixProduit)
                                column1.appendChild(cardProduit)

                                count++
                                }
                                if (count >=3  && count < 6){
                                cardProduit =document.createElement('div')
                                cardProduit.classList.add('card-produit')
                                
                                imgProduit=document.createElement('img')
                                imgProduit.src = `${element.image}`
                                imgProduit.classList.add("piece-img")

                                titleProduit=document.createElement('h2')
                                titleProduit.innerHTML = `${element.type}`

                                couleurDispo=document.createElement('h3')
                                couleurDispo.innerHTML = `${element.couleur}`

                                prixProduit=document.createElement('h4')
                                prixProduit.innerHTML = `${element.prix}`

                                cardProduit.appendChild(imgProduit)
                                cardProduit.appendChild(titleProduit)
                                cardProduit.appendChild(couleurDispo)
                                cardProduit.appendChild(prixProduit)
                                column2.appendChild(cardProduit)
                                
                                count++
                                }
                                if (count >=6  && count < 9){
                                cardProduit =document.createElement('div')
                                cardProduit.classList.add('card-produit')
                                
                                imgProduit=document.createElement('img')
                                imgProduit.src = `${element.image}`
                                imgProduit.classList.add("piece-img")

                                titleProduit=document.createElement('h2')
                                titleProduit.innerHTML = `${element.type}`

                                couleurDispo=document.createElement('h3')
                                couleurDispo.innerHTML = `${element.couleur}`

                                prixProduit=document.createElement('h4')
                                prixProduit.innerHTML = `${element.prix}`

                                cardProduit.appendChild(imgProduit)
                                cardProduit.appendChild(titleProduit)
                                cardProduit.appendChild(couleurDispo)
                                cardProduit.appendChild(prixProduit)
                                column3.appendChild(cardProduit)
                                
                                count++
                                }
                                
                                
                            });
                            affichageProduit.appendChild(column1)
                            affichageProduit.appendChild(column2)
                            affichageProduit.appendChild(column3)
                        })
                        .catch(error => console.log(error))
                </script>

            </div>

        </main>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="main.js"></script>
<script>
    /*
    const container = document.getElementById('container');
  const url = '/Projet2RichRicasso/api/produits/rose';
  console.log(url)
  fetch(url)
  .then(response => response.json())
  .then(data => {
  console.log(data)
  
  data.forEach(element => {
    produit = document.createElement('img')
  produit.src= `${element.image}`
  container.appendChild(produit)
  });
 
  
  produit = document.createElement('img')
  produit.src= `${data.image}`
  container.appendChild(produit)
  


})
  .catch(error => console.log(error))
  */

</script>

</html>