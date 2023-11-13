let affichageProduit = document.querySelector('.affichage-produit');
let column1 = document.querySelector('.column')

let categorie = document.querySelectorAll(".categorie")
//tous
//categorie[1].classList.add("isSelected")


//start avec le tous
let allProduit = '/Projet2RichRicasso/api/produits';
    getProduit(allProduit)
    categorie[0].classList.add("isSelected")

    // selection
categorie[0].addEventListener("click",()=>{
    removeAllIsSelected()
    categorie[0].classList.add("isSelected")
  
    let allProduit = '/Projet2RichRicasso/api/produits';
    getProduit(allProduit)
})
categorie[1].addEventListener("click",()=>{
    removeAllIsSelected()
    categorie[1].classList.add("isSelected")
    
    let allCravates = '/Projet2RichRicasso/api/produits/cravates';
    getProduit(allCravates)
})
categorie[2].addEventListener("click",()=>{
   removeAllIsSelected()
    categorie[2].classList.add("isSelected")
    let allProduit = '/Projet2RichRicasso/api/produits/chemises';
    getProduit(allProduit)
})

//  par couleur
var e = document.getElementById("couleur-select");
var tailles = document.getElementById("couleur-select");
function onChange() {
  var value = e.value;
  allProduitParCouleur = `/Projet2RichRicasso/api/produits/${value}`
  console.log(allProduitParCouleur)
  getProduit(allProduitParCouleur)
  removeAllIsSelected()
}
function onChange2() {
    var value = tailles.value;
    allProduitParTaille = `/Projet2RichRicasso/api/produits/${value}`
   
    getProduit(allProduitParTaille)
    removeAllIsSelected()
  }

e.onchange = onChange;
tailles.onchange = onChange2;
onChange();
onChange2()

function removeAllIsSelected() {
    categorie.forEach(element => {
        element.classList.remove("isSelected")
    });
    
}
function getProduit(url){
    column1.innerHTML = ""
    fetch(url)
    .then(response => response.json())
    .then(data => {
        
        
        

        data.forEach(element => {
        
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

          
        }
        )
        affichageProduit.appendChild(column1)
            })
        
    
}


