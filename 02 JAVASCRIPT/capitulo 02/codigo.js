const tarea = document.querySelector('.tarea');
const btn = document.querySelector('button');
const tareasBox = document.querySelector('ul');
const alerta = document.querySelector('.alerta');

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
})