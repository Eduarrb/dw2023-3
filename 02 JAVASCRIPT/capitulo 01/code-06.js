/* ⚡⚡ FUCTIONS ⚡⚡ */
// funciones de expression regular
// ejecuciones sincronas ????? 
saludar();

let nombre = 'joshi';
console.log(nombre);

function saludar(){
    console.log('Hola a todos');
}

function sumarNumeros(){
    let suma = 10 + 5;
    console.log(suma);
}

sumarNumeros();

// 1️⃣ ENTENDER QUE SON PARAMETROS Y ARGUMENTOS
function calcEdad(fechaNac){
    const edad = 2023 - fechaNac;
    console.log(edad);
}

calcEdad(1880);
calcEdad(2000);

console.log('************************');

function saludar2 (nombre, ciudad, estadoCivil) {
    let saludo = `Hola, mi nombres es ${nombre}, soy de la ciudad de ${ciudad} y estoy ${estadoCivil}`;
    console.log(saludo);
}

saludar2('Juan', 'Huancayo', 'Viudo');

console.log('****************************');

function primeraMayus (str){
    const primeraLetraMayus = str[0].toUpperCase();
    // console.log(primeraLetraMayus, str);
    let resto = '';
    for(let i = 1; i < str.length; i++){
        resto += str[i];
    }
    console.log(primeraLetraMayus + resto.toLowerCase());
}

primeraMayus('cHIMUELO');

// 2️⃣ RETURN

function sumar (a, b) {
    const suma = a + b;
    // console.log(suma);
    return suma;
}

// console.log(sumar(5, 6));
const res1 = sumar(5, 6);
console.log(res1);

// VARIABLES O CONSTANTES GLOBALES
const nombres = 'Jaimito Perez';

// ⚡⚡ EL SCOPE, AMBITO, CONTEXTO DE LA FUNCION
function saludar3(){
    return `Hola, soy ${nombres}`;
}

const saludo3 = saludar3();
console.log(saludo3);