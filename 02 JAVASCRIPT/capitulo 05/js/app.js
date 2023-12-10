const artista = document.querySelector('.search');
const btn = document.querySelector('.btn');

// EJECUTANDOSE SINCRONAMENTE
// function saludar (){
//     console.log('hola');
// }

// saludar();


const obtenerJson = async function(artista){
    const data = await fetch(`https://api.discogs.com/database/search?q=${artista}&type=master&artist=${artista}&format=album&token=HIjezRGadqgCAgYTcCOtPFyTVWlJSOoHyUhpmLhC`);
    
    const res = await data.json();
    console.log(res)
}

btn.addEventListener('click', function(){
    obtenerJson(artista.value);
})

