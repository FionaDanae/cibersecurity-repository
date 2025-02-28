import './bootstrap';
import Aos from 'aos'; //importación de toda la paquetería
import 'aos/dist/aos.css';

//inicializar efecto
Aos.init({
    duration: 1000,
    delay: 200, //antes de la animación existe un retraso
    once: false, //cuántas veces quieres que se repita
});

/*import Typed from 'typed.js';
document.addEventListener('DOMContentLoaded', function(){

    const typedTitle = new Typed("#typed-title",{
        strings:["Bienvenidos al Himalaya", "Bienvenidos a la montaña", "Helado??"],
        typeSpeed: 100,
        showCursor: false,
        loop: true,
        backSpeed: 50,
    })
});*/