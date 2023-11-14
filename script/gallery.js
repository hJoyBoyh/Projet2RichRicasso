let gallery = document.querySelector('.gallery');
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