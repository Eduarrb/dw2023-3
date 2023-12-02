/* ⚡⚡ ARRAYS ⚡⚡ */
/*
    CONJUNTO DE ELEMENTOS
    TIPO DE OBJETO
*/

let numeros = [23, 45, 5786, 68786, 122];
console.log(numeros);
console.log(numeros[2]);
console.log(numeros[numeros.length - 1]);

let mixto = [235, 12.2, false, 'jaimito', ['Mario', 'Luigui']];
console.log(mixto);

// 1️⃣ LOOPS - FOR
for(let contador = 0; contador < numeros.length; contador++){
    console.log(`indice: ${contador} - valor: ${numeros[contador]}`);
}

console.log('*******************************');

let personajes = ['Mario', 'Luigui', 'Ryo', 'Ken', 'Snake', 'Joshi'];

let plantilla = '';

for(let i = 0; i < personajes.length; i++){
    // console.log(personajes[i]);
    // plantilla = personajes[i];
    plantilla =  plantilla + `<h1>${personajes[i]}</h1>`;
}

const bloque1 = document.querySelector('.bloque1');
bloque1.innerHTML = plantilla;

console.log(plantilla);

/* METODOS DE ARRAYS -> FOREACH, MAP, FIND, .... */