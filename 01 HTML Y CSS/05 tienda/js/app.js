/*
    DOM -> DOCUMENT OBJECT MODEL
*/
/* ES5 */
// var nombre = 'Eduardo';
// var num = 12;
// var bool = true;
// var array = [];

/* ES6 */
/* LET & CONST */
let menu = document.querySelector('.nav__menu__container__right__box');
let btnMenu = document.querySelector(".nav__menu__container--iconMenu");
// console.log(menu.classList);
// menu.classList.add('mostrar');
// console.log(btnMenu);
btnMenu.addEventListener('click', function(evento){
    // console.log(evento);
    evento.preventDefault();
    // menu.classList.add('mostrar');
    /*
        si tiene la clase -> quitar
        si no tiene -> agregarla
    */
   menu.classList.toggle('mostrar');

})

