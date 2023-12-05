/* ⚡⚡ ARROW FUNCTIONS ⚡⚡ */

// 1️⃣ FUNCIONES DE EXPRESION

saludar();

function saludar () {
    console.log('hola, mundo');
}

// 2️⃣ ES6 Arrow Functions

const saludar2 = () => {
    console.log('Hola mundo 2');
}

saludar2();

const suma = (a, b) => {
    return a + b;
}

console.log(suma(2,5));

// const calcEdad = (fechaNac) => {
//     let edad = 2023 - fechaNac;
//     return edad;
// }

// 3️⃣ Sin parentesis cuando se usa solo un parametro
// const calcEdad = fechaNac => {
//     let edad = 2023 - fechaNac;
//     return edad;
// }

// 4️⃣ pasando el return directamente el valor
// const calcEdad = fechaNac => {
//     return 2023 - fechaNac;
// }

// 5️⃣ podemos retornar el valor en una sola linea de codigo sin usar RETURN y sin llaves
const calcEdad = fechaNac => 2023 - fechaNac;

const res = calcEdad(1992);
console.log(res);