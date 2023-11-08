let titleAbout2 = document.querySelectorAll(".about-us-title")

let carrouselTitle = gsap.timeline()
carrouselTitle
.to(titleAbout2,{
    duration : 10,
    x:"-100%",
    repeat:-1,
    ease:Linear.easeIn
})