/* ⚡⚡ OBJETOS ⚡⚡ */
// propiedades, caracteristicas y metodos
// key - value pair

const celular = {
    modelo: 'Iphone 15 por max',
    color: 'Spacial Gray',
    size: `6.8'`,
    precio: 4500.59,
    accesorios: ['caragdor', 'audifonos', 'cable usb-c'],
    liberado: true,
    bateria: {
        capacidad: '5000w',
        tipoCarga: '30w'
    }
}

// console.log(celular);
// console.log(celular.size);
// console.log(celular.accesorios);
// console.log(celular.accesorios[1]);
// console.log(celular.bateria.tipoCarga);

// celular.os = 'Iphone OS';
// console.log(celular);

// celular = {
//     modelo: 'android'
// }

// 1️⃣ METODOS -> FUNCIONES DENTRO DE UN OBJETO
const usuario = {
    dni: '12345678',
    nombre: 'Jaimito',
    correo: 'jaimito@gmail.com',
    fechaNac: 2010,
    iniciarSesion: function(){
        console.log('Bienvenido, iniciaste sesion correctamente');
    }
}
// console.log(usuario.dni);
// usuario.iniciarSesion();

const personaje = {
    nombre: 'Joshi',
    correo: 'joshi@nintendo.com',
    skills: ['saltar', 'come caparazones', 'sacar lengua', 'corre'],
    saltar: function () {
        // console.log(`El personaje ${personaje.nombre} ha hecho un salto`);
        // ⚡⚡ la palabra reservada THIS
        // Hace referencia al objeto en el cual se este ejecutando esta propiedad.
        // console.log(this.nombre);
        console.log(`El personaje ${this.nombre} ha hecho un salto`);
    },
    printSkils: function (){
        for(let i = 0; i < this.skills.length; i++){
            console.log(`Skill: ${this.skills[i]}`);
        }
    }
}

// console.log(this);
// console.log(window);

// personaje.printSkils();

const carro = {
    color: ['blanco', 'turquesa', 'celeste', 'rojo'],
    modelo: 'Sentra',
    numPuertas: 5,
    plantilla: '',
    printColors: function (){
        for(let i = 0; i < this.color.length; i++){
            console.log(this.color[i]);
        }
    },
    // printColors: () => {
    //     // for(let i = 0; i < this.color.length; i++){
    //     //     console.log(this.color[i]);
    //     // }
    //     console.log(this);
    // }
    crearPlantilla: function() {
        for(let i = 0; i < this.color.length; i++){
            this.plantilla += `<h1>${this.color[i]}</h1>`
        }
    },
    printHTML: function(){
        const bloque1 = document.querySelector('.bloque1');
        bloque1.innerHTML = this.plantilla;
    }
}

// carro.printColors();
carro.crearPlantilla();
carro.printHTML();