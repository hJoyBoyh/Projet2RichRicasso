// user variable
let user = document.querySelector(".user-icon");
let userParametre = document.querySelector("#user-parametre")
let exit = document.querySelector(".exit-parametre")

// global loading variable
let preloader = document.querySelector(".preloader")
let content = document.querySelector("#content")




//variable for animation
let header = document.querySelector("header")
let main = document.querySelector("main")


// nav user function
let enableUserPanel = ()=>{
    userParametre.style.display = "flex"
     // stop scroll
    document.querySelector("html").classList.add('stop-scrolling')
    document.querySelector("body").classList.add('stop-scrolling')
    
}
let disableUserPanel = ()=>{
    userParametre.style.display = "none"
    // stop scroll
    document.querySelector("html").classList.remove('stop-scrolling')
    document.querySelector("body").classList.remove('stop-scrolling')
}

user.addEventListener("click",()=>{
 enableUserPanel()
})
exit.addEventListener("click",()=>{
   disableUserPanel()
})

// animation page function

let homeAnimation = ()=>{


let first = document.querySelector(".first")
let firstH1 = document.querySelector(".h1-first")
let scrollLine = document.querySelector(".scroll-line")

let carousel = document.querySelector(".caroussel-content")
let info = document.querySelector(".info")
let navli = document.querySelectorAll(".nav-li")

// loading animation for accueil
content.style.opacity =0
firstH1.style.opacity =1
    // intro rich collection
    let tl = gsap.timeline()
    tl.add("start")
    tl.to(preloader,{
        duration:2,
        opacity:0,
       

    })
    tl.from(firstH1,{
        duration:1,
        opacity:0,
        x:50
    },"start")
    tl.from(scrollLine,{
        duration:1,
        scaleY:0,
        transformOrigin:"top",
        repeat:-1
    })

    // the home animation
    //animation pour l accueil
let acceuilAnimation = gsap.timeline()

acceuilAnimation.to(first,{
    duration:2,
    opacity:0,
})
acceuilAnimation.to(first,{
    func:()=>{
        first.style.display = "none"
        content.style.display = "block"
    }
})



acceuilAnimation.to(content,{
    duration:2,
    opacity:1,

})

acceuilAnimation.add("start")

    carousel.style.opacity = 1

    acceuilAnimation.from(carousel,{
        duration:1,
        x:-150,
        opacity:0
    },"start")

    info.style.opacity = 1

    document.querySelector(".info-h1").style.opacity = 1

    document.querySelector(".info-h2").style.opacity = 1

    document.querySelector(".btn-voir-plus").style.opacity = 1

    acceuilAnimation.from(info,{
        duration:1,
        x:150,
        opacity:0
    },"start")
    acceuilAnimation.from(navli,{
        duration:1,
        y:-150,
        opacity:0,
        stagger:0.2
    },"start")
    acceuilAnimation.from(".info-h1",{
        duration:1,
        x:150,
        opacity:0
    },"start")
    acceuilAnimation.from(".info-h2",{
        duration:1,
        x:150,
        opacity:0
    })
    acceuilAnimation.from(".btn-voir-plus",{
        duration:1,
        x:150,
        opacity:0
    })

    // declencheur de l animation selon le scroll position rendu
    ScrollTrigger.create({
        trigger:first,
        start:"76% 75.99%",
        end :"100% 94%",
        markers:{startColor: "rgba(0, 0, 0, 0)", endColor: "rgba(0, 0, 0, 0)", fontSize: "18px", fontWeight: "bold", indent: 20},
        animation:acceuilAnimation
    })


}

let produitAnimation = ()=>{
    let tl = gsap.timeline()
    tl.add("start")
    tl.to(preloader,{
        duration:2,
        opacity:0,
      

    })
    tl.to(preloader,{
        duration:0.5,
        
        func :()=>{
            preloader.style.display = "none"
        }

    })
}


paceOptions = {
    ajax : true,
    document : true,
    eventLag: false
}
// when loading finish
Pace.on('done', () =>{
    console.log(window.location.pathname)
    if(window.location.pathname == "/"||window.location.pathname == "/Projet2RichRicasso/accueil.php"){
       homeAnimation()
    }
    if(window.location.pathname == "/produit/" ||window.location.pathname == "/Projet2RichRicasso/produit.php" ){
       produitAnimation()
    }
    
   
   



})




