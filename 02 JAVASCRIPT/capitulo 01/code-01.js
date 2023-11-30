/*
    ⚡⚡ JAVASCRIPT ⚡⚡
    
    DOM -> DOCUMENT OBJECT MODEL
    "key sensitive"
    NO ES OBLIGATORIO EL USO DEL PUNTO Y COMA AL FINAL DE CADA LINEA DE CODIGO
*/

/* 
⚡ TIPOS DE DATOS
- STRINGS
- NUMBERS
- BOOLEANS
- OBJECTS (varios tipos)

ES6 LET & CONST
*/

// ⚡⚡ STRINGS = es una cadena de texto

let nombre = 'Eduardo';
let apellido = "Arroyo";
// console.log(nombre, apellido);

// 1️⃣ CONCATENAR

let nombreCompleto = nombre + ' ' + apellido;
// console.log(nombreCompleto);

// 2️⃣ PROPIEDADES
console.log(nombre.length);
// console.log(nombreCompleto.length);

// 3️⃣ INDICES -> son numeros que se asignan por posicion dentro de un objeto tipo array - 0

console.log(nombre[0]);
console.log(nombre[nombre.length - 1]);

let oracion = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero alias similique nisi modi quam. Fugit quasi magni cumque dignissimos possimus voluptas delectus harum fugiat perspiciatis. Numquam, tempora! Recusandae, alias maxime.';

console.log(oracion[oracion.length - 1]);

const dominio = 'continental.edu.pe';

// REALIZAR: 
/*
    nombre = Eduardo
    apellido = Arroyo
    resultado = earroyo@continental.edu.pe;
*/ 

let ciudad = 'Huancayo';
console.log(ciudad);
ciudad = 'Lima';
console.log(ciudad);

// dominio = 'upla.edu.pe';
// console.log(dominio);
const correo = nombre[0] + apellido + '@' + dominio;
// console.log(correo);
console.log((nombre[0] + apellido + '@' + dominio).toUpperCase());

// 4️⃣
console.log(correo.toLowerCase());
console.log(correo.toUpperCase());
