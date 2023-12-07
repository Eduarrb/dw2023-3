const tarea = document.querySelector('.tarea');
const btn = document.querySelector('button');
const tareasBox = document.querySelector('ul');
const alerta = document.querySelector('.alerta');
const items = document.querySelectorAll('li');

btn.addEventListener('click', function(){
    // console.log('hiciste click');
    // console.log(tarea.value);
    if(tarea.value === ''){
        alerta.innerHTML = 'Debes escribir una tarea para agregarla 💥💥';
    } else {
        alerta.innerHTML = '';
        const item = `<li>${tarea.value}</li>`;
        tareasBox.insertAdjacentHTML('beforeend', item);
        tarea.value = '';
    }
});

// 1️⃣ 💥💥 SOLUCION INCORRECTA
// console.log(items);
// for(let i = 0; i < items.length; i++){
//     // console.log(items[i]);
//     items[i].addEventListener('click', function(){
//         items[i].remove();
//     });
// }

// 2️⃣ EVENT DELEGATION
tareasBox.addEventListener('click', function(e){
    // console.log(e)
    if(e.target.tagName === 'LI'){
        console.log(e.target.textContent);
        e.target.remove();
    }
})