const artista = document.querySelector('.search');
const btn = document.querySelector('.btn');
const box = document.querySelector('.section__right__contenido__resultado__discografia');

// EJECUTANDOSE SINCRONAMENTE
// function saludar (){
//     console.log('hola');
// }

// saludar();


const obtenerJson = async function(artista){
    if(artista === ''){
        console.log('Debes ingresar un nombre de artista');
    } else {
        const data = await fetch(`https://api.discogs.com/database/search?q=${artista}&type=master&artist=${artista}&format=album&token=HIjezRGadqgCAgYTcCOtPFyTVWlJSOoHyUhpmLhC`);
        
        const res = await data.json();
        console.log(res.results);
        let plantilla = '';
        res.results.forEach(el => {
            // console.log(el.title);
            // plantilla += `<h1>${el.title}</h1>`;
            plantilla += `
                <div class="section__right__contenido__resultado__discografia__item">
                    <h3 class="section__right__contenido__resultado__discografia__item--titulo">${el.title}</h3>
                    <div class="section__right__contenido__resultado__discografia__item__left">
                        <img src="${el.cover_image}" alt="">
                        <div class="section__right__contenido__resultado__discografia__item__left__info">
                            <p>Año: <span>${el.year}</span></p>
                            <p>País: <span>${el.country}</span></p>
                        </div>
                    </div>
                </div>
            `;
        })
        // console.log(plantilla);
        box.innerHTML = plantilla;
    }
}

btn.addEventListener('click', function(){
    obtenerJson(artista.value);
    artista.value = '';
})

