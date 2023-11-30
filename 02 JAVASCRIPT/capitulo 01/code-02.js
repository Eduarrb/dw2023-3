/* ⚡⚡ NUMBERS ⚡⚡ */

let radio = 12;
let pi = 3.1416;
// let nombre = 'Eduardo';

// console.log(radio, pi);
// console.log(nombre);
// console.log('12');

// 1️⃣ OPERACIONES MATEMATICAS
let circunferencia = pi * radio ** 2;
console.log(circunferencia);

let num1 = 10;
let num2 = 5;

let res1 = num1 + num2;
console.log(res1);

let numExtranio = "12";
console.log(numExtranio);

let res2 = res1 + +numExtranio; // 27
console.log(res2); // 27
res2 = 'este es otro valor';
console.log(res2);

let numMaximo = 1589;
console.log(numMaximo);

let num3 = 19;
console.log(num3);

// num3 = num3 + 5;
num3 += 5; // => num3 = num3 + 5;
console.log(num3);

num3 -= 10; // num3 = num3 - 10
console.log(num3);

num3 *= 2; // num3 = num3 * 2;
console.log(num3);

num3 /= 3;
console.log(num3); // num3 / 3

let num4 = 5;
console.log(num4);
// num4 += 1;
num4++;
console.log(num4); // 6
num4++;
console.log(num4); // 7
num4--;
console.log(num4); // 6

// 2️⃣ OBJETO MATH

let num5 = 10.5;
// console.log(num5.toFixed(3));

let res3 = Math.floor(num5);
console.log(res3); // 10
let res4 = Math.ceil(num5);
console.log(res4);
let res5 = Math.round(num5);
console.log(res5); // 11
// console.log(typeof('hola'));
