/* ⚡⚡ TEMPLATE STRINGS ⚡⚡ */

const nombre = 'Jaimito';
let edad = 18;

// Hola, mi nombres es Jaimito y tengo 18 años

let cadena1 = 'Hola, mi nombre es ' + nombre + ' y tengo ' + edad + " años";
console.log(cadena1);
// let cadena2 = 'hola soy ' + nombre;

let cadena2 = `Hola, mi nombre es ${nombre} y tengo ${edad} años`;
console.log(cadena2);

// let cadena3 = "
// <div>
// <h4>Hola soy ${nombre}</h4>
// <p>Tengo ${edad} años</p>
// </div>
// ";

let plantilla = `
    <div>
        <h4>Hola soy ${nombre}</h4>
        <p>Tengo ${edad} años</p>
    </div>
`;
console.log(plantilla);

const bloque1 = document.querySelector('.bloque1');
bloque1.innerHTML = plantilla;