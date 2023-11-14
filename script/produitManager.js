let affichageProduit = document.querySelector('.affichage-produit');
let column1 = document.querySelector('.column')
let categorie = document.querySelectorAll(".categorie");



//Commencer avec tous les produits afficher
let allProduit = '/Projet2RichRicasso/api/produits';
categorie[0].classList.add("isSelected")
getProduit(allProduit)



// selection
//tous
categorie[0].addEventListener("click", () => {
    removeAllIsSelected()
    categorie[0].classList.add("isSelected")
    let allProduit = '/Projet2RichRicasso/api/produits';
    getProduit(allProduit)
})
//cravattes
categorie[1].addEventListener("click", () => {
    removeAllIsSelected()
    categorie[1].classList.add("isSelected")
    let allCravates = '/Projet2RichRicasso/api/produits/cravates';
    getProduit(allCravates)
})
//chemises
categorie[2].addEventListener("click", () => {
    removeAllIsSelected()
    categorie[2].classList.add("isSelected")
    let allChemises = '/Projet2RichRicasso/api/produits/chemises';
    getProduit(allChemises)
})

// prix ASC
categorie[3].addEventListener("click", () => {
    removeAllIsSelected()
    categorie[3].classList.add("isSelected")
    let allProduitASC = '/Projet2RichRicasso/api/produits/asc';
    getProduit(allProduitASC)
})
//prix DESC
categorie[4].addEventListener("click", () => {
    removeAllIsSelected()
    categorie[4].classList.add("isSelected")
    let allProduitDESC = '/Projet2RichRicasso/api/produits/desc';
    getProduit(allProduitDESC)
})

//  par couleur
var couleurs= document.getElementById("couleur-select");
var tailles = document.getElementById("tailles-select");


couleurs.onchange = onChange;
tailles.onchange = onChange2;
onChange();
onChange2();

function removeAllIsSelected() {
    categorie.forEach(element => {
        element.classList.remove("isSelected")
    });

}
function getProduitId(url) {
    column1.innerHTML = ""
    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data)

                cardProduit = document.createElement('div')
                cardProduit.classList.add('card-produit')

                titre = document.createElement('h1')
                titre.innerHTML= "Produit Choisi"

                idProduit = document.createElement('h1')
                idProduit.innerHTML= `${data.id}`
                idProduit.style.display = "none"
              

                imgProduit = document.createElement('img')
                imgProduit.src = `${data.image}`
                imgProduit.classList.add("piece-img")

                titleProduit = document.createElement('h2')
                titleProduit.innerHTML = `Type de produit : ${data.type}`

                couleurDispo = document.createElement('h3')
                couleurDispo.innerHTML = `Couleur disponible : ${data.couleur}`

                prixProduit = document.createElement('h4')
                prixProduit.innerHTML = `Prix : ${data.prix}$`

                tailleProduit = document.createElement('h4')
                tailleProduit.innerHTML = `Taille : ${data.taille}`

                descriptionProduit = document.createElement('p')
                descriptionProduit.innerHTML = `Description : ${data.description}`


                cardProduit.appendChild(titre)
                cardProduit.appendChild(idProduit)
                cardProduit.appendChild(imgProduit)
                cardProduit.appendChild(titleProduit)
                cardProduit.appendChild(couleurDispo)
                cardProduit.appendChild(prixProduit)
                cardProduit.appendChild(tailleProduit)
                cardProduit.appendChild(descriptionProduit)
              


                column1.appendChild(cardProduit)
                removeAllIsSelected()

               


            
            
        }
        )
    }
function getProduit(url) {
    column1.innerHTML = ""
    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data)




            data.forEach(element => {

                cardProduit = document.createElement('div')
                cardProduit.classList.add('card-produit')

               
                

                idProduit = document.createElement('h1')
                idProduit.innerHTML= `${element.id}`
                idProduit.style.display = "none"
              

                imgProduit = document.createElement('img')
                imgProduit.src = `${element.image}`
                imgProduit.classList.add("piece-img")

                titleProduit = document.createElement('h2')
                titleProduit.innerHTML = `${element.type}`

                couleurDispo = document.createElement('h3')
                couleurDispo.innerHTML = `${element.couleur}`

                prixProduit = document.createElement('h4')
                prixProduit.innerHTML = `${element.prix}$`

                
                cardProduit.appendChild(idProduit)
                cardProduit.appendChild(imgProduit)
                cardProduit.appendChild(titleProduit)
                cardProduit.appendChild(couleurDispo)
                cardProduit.appendChild(prixProduit)
              


                column1.appendChild(cardProduit)

               


            }
            )
            
            // selection de une card 
            let allCardProduit = document.querySelectorAll(".card-produit")

            if(allCardProduit != null){

                allCardProduit.forEach(element => {
                    element.addEventListener("click",()=>{
                      produitInfo = `/Projet2RichRicasso/api/produits/${element.querySelector("h1").innerHTML}`
                     getProduitId(produitInfo)

                    })
                });
            }
            
            // append  pour l afficher
            affichageProduit.appendChild(column1)
        })


}


function onChange() {
    var value = couleurs.value;
    if (value != ""){
    allProduitParCouleur = `/Projet2RichRicasso/api/produits/${value}`
    console.log(allProduitParCouleur)
    getProduit(allProduitParCouleur)
    removeAllIsSelected()
    }
    
}

function onChange2() {
    var value = tailles.value;
    if (value != ""){
    allProduitParTaille = `/Projet2RichRicasso/api/produits/${value}`
    getProduit(allProduitParTaille)
    removeAllIsSelected()
    }
}
