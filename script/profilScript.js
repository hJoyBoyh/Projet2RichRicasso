let btnProfil = document.querySelector("#btn-profil")
let btnSecurite = document.querySelector("#btn-compte-securite")

let userProfil = document.querySelector("#user-profil-info")
let userSecurite = document.querySelector("#user-securite-info")
userSecurite.style.display = "none"

// on commence avec profil
btnProfil.style.color = "#a40000"

btnProfil.addEventListener("click",()=>{
    userSecurite.style.display = "none"
    userProfil.style.display = "flex"
    btnProfil.style.color = "#a40000"
    btnSecurite.style.color = "black"
}
    
)
btnSecurite.addEventListener("click",()=>{
    userSecurite.style.display = "flex"
    userProfil.style.display = "none"
    btnSecurite.style.color = "#a40000"
    btnProfil.style.color = "black"
}
    
)