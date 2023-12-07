const form = document.querySelector('.quiz-form');
const respCorrectas = ['A','A','A','A'];
const resultado = document.querySelector('.result');

form.addEventListener('submit', function(e){
    e.preventDefault();
   
    // console.log(form.q1.value);
    // console.log(form.q2.value);
    // console.log(form.q3.value);
    // console.log(form.q4.value);
    const respUsuario = [
        form.q1.value,
        form.q2.value,
        form.q3.value,
        form.q4.value,
    ];
    
    // for(let i = 0; i < respUsuario.length; i++){
    //     console.log(respUsuario[i], respCorrectas[i])
    // }
    let puntaje = 0;
    respUsuario.forEach((valor, index) => {
        // console.log(`${index}: ${valor}`);
        if(valor === respCorrectas[index]){
            console.log(`La respuesta de la pregunta ${index + 1} es correcta`);
            // puntaje = puntaje + 25;
            puntaje += 25;
        } else {
            console.log(`La respuesta de la pregunta ${index + 1} es erronea 💥💥`);
        }
    });

    // console.log(puntaje);
    // resultado.querySelector('span').textContent = puntaje + '%';
    // resultado.classList.remove('d-none');
    let posicionY = scrollY; // 132
    console.log(posicionY);

    // setInterval(function(){
    //     console.log('se esta repitiendo');
    // }, 1000);
    let animacionTop = setInterval(function(){
        if(posicionY <= 0){
            console.log('aqui deberia terminar el loop');
            clearInterval(animacionTop);
        } else {
            posicionY = posicionY - 10; // 131
            scrollTo(0, posicionY);
            console.log(posicionY);
        }
    }, 10)
});