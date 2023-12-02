/* ⚡⚡  CONDICIONALES Y BOOLEANOS ⚡⚡ */
/*
    valores: true & false => booleanos

    OPERADORES LOGICOS Y DE COMPARACION
    IGUALDAD ==, ===
    ASIGNACIÓN =
    COMPARACION
        >, >=, <, <=, !true == false, !=, !==
*/

if (1 === '1') {
    // aqui se ejecuta lo que es verdadero
    console.log('es verdadero');
}
else {
    //  aqui se ejecuta lo que es falso
    console.log('es falso');
}

let nombre = 'mario';

if(nombre.length > 10){
    console.log(`el string ${nombre} tiene mas de 10 caracteres`);
} else {
    console.log(`el string ${nombre} es menor de 10 caracteres`);
}

console.log('***********************');

if(nombre === 'marioo' && nombre.length >= 5){
    console.log('es verdadero');
} else if(nombre.length === 5) {
    console.log('esta parte es ele else if')
} else {
    console.log('es falso')
}

console.log('**************************');
// LOOP CONDICIONAL -> WHILE

let personajes = ['Mario', 'Luigui', 'Ryo', 'Ken', 'Snake', 'Joshi'];

let i = 0;


// 💥💥💥 CUIDADO CON LOS LOOP INFINITOS

let plantilla = '';

while(i < personajes.length){
    console.log(personajes[i]);
    plantilla += `<h1>${personajes[i]}</h1>`
    i++;
}

const bloque1 = document.querySelector('.bloque1');
bloque1.innerHTML = plantilla;