let choseColumn = 0;

afficherColumn1(0)
afficherColumn2(2,2)
afficherColumn1(4)


    function afficherColumn1(idx){
     
let url = '/Projet2RichRicasso/api/produits';   
fetch(url)
.then(response => response.json())
.then(data => {
    let pieceColumn = document.querySelectorAll(".piece-column")

            cardPiece = document.createElement('div')
            cardPiece.classList.add('card-piece')

            imgPiece = document.createElement('img')
            imgPiece.src = `${data[idx].image}`
            imgPiece.classList.add("piece-img")

            titrePiece = document.createElement('h2')
            titrePiece.innerHTML = `${data[idx].type}`

            prixPiece = document.createElement('h3')
            prixPiece.innerHTML = `${data[idx].prix}`

           


           
            
            cardPiece.appendChild(imgPiece)
            cardPiece.appendChild(titrePiece)
            cardPiece.appendChild(prixPiece)

            if(choseColumn == 0){
                pieceColumn[0].appendChild(cardPiece)
                choseColumn++;
            }
            else{
                pieceColumn[1].appendChild(cardPiece)
            }
            
            
           

  

})
.catch(error => console.log(error))



    }

    
    function afficherColumn2(idx,idx2){
        
let url = '/Projet2RichRicasso/api/produits';
        fetch(url)
        .then(response => response.json())
        .then(data => {
            let pieceColumn = document.querySelector(".piece-column-2")
        
                    cardPiece = document.createElement('div')
                    cardPiece.classList.add('card-piece')
        
                    imgPiece = document.createElement('img')
                    imgPiece.src = `${data[idx].image}`
                    imgPiece.classList.add("piece-img")
        
                    titrePiece = document.createElement('h2')
                    titrePiece.innerHTML = `${data[idx].type}`
        
                    prixPiece = document.createElement('h3')
                    prixPiece.innerHTML = `${data[idx].prix}`
        
                    
                    cardPiece.appendChild(imgPiece)
                    cardPiece.appendChild(titrePiece)
                    cardPiece.appendChild(prixPiece)
        
                    pieceColumn.appendChild(cardPiece)

//------------------------------------------------------------
                    btn = document.createElement('div')
                    btn.classList.add('btn')
                
                    voirplus = document.createElement('h3')
                    voirplus.innerHTML = '<a href="produit.php">voir plus</a>'
                    
                    btn.appendChild(voirplus)
                    pieceColumn.appendChild(btn)
//----------------------------------------------------
                    cardPiece2 = document.createElement('div')
                    cardPiece2.classList.add('card-piece')
        
                    imgPiece2 = document.createElement('img')
                    imgPiece2.src = `${data[idx2].image}`
                    imgPiece2.classList.add("piece-img")
        
                    titrePiece2 = document.createElement('h2')
                    titrePiece2.innerHTML = `${data[idx2].type}`
        
                    prixPiece2 = document.createElement('h3')
                    prixPiece2.innerHTML = `${data[idx2].prix}`
        
                    
                    cardPiece2.appendChild(imgPiece2)
                    cardPiece2.appendChild(titrePiece2)
                    cardPiece2.appendChild(prixPiece2)

                    pieceColumn.appendChild(cardPiece2)
                   
        
          
        
        })
        .catch(error => console.log(error))
        
        
        
            }