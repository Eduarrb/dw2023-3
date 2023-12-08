/* ⚡⚡ EJECUCIONES SINCRONAS Y ASINCRONAS ⚡⚡ */

// 2️⃣ ASINCRONAS
// setInterval(function(){
//     console.log('esta es una ejecucion asincrona');
// }, 1000)


// 1️⃣ SINCRONAS
let nombre = 'Jaimito';
let apellido = 'Perez';

console.log(nombre);

function saludar(){
    console.log('hola a todos');
}

// saludar();

// JSON -> JAVASCRIPT OBJECT NOTATION

// FETCH -> DEVULEVE UNA PROMESA

// console.log(fetch('data/personas.json'));

fetch('https://pokeapi.co/api/v2/pokemon/pikachu')
    .then(res => {
        console.log(res.json());
    })
    .catch(err => {
        console.log(err);
    })