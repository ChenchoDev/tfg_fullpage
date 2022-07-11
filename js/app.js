const myFullpage = new fullpage('#fullpage', {
    autoScrolling: true,
    fitToSection: false,
    fitToSectionDelay: 300,
    easing: 'easeInOutCubic',
    scrollingSpeed: 700,
    css3: true,
    easingcss3: 'ease-out',
    loopBottom: false,
    navigation: true,
    menu: '#menu',
    anchors: ['inicio', 'servicios', 'acceso', 'contacto'],
    navigationTooltips: ['Inicio', 'Servicios', 'Acceso', 'Contacto'],
    showActiveTooltip: false,
    sectionsColor: ['#000', '#c2c2c2', '#000', '#000'],
    verticalCentered: true,
    controlArrows: true,
    slidesNavigation: false,
    easingcss3: 'ease-out', // Curva de velocidad del efecto.
    loopBottom: false,


});

$(document).ready(function() {
    $('#example').DataTable();
});

let fpwatermark = document.querySelector('.fp-watermark');
fpwatermark.remove()

let formulario = document.querySelector("#formulario");
let usuario = document.querySelector("#usuario");
let password = document.querySelector("#password");
let btnform = document.querySelector("#btnform");
btnform.addEventListener('click', fvalida)

function fvalida() {
    if (usuario.length == 0) {
        alerto('El campo usuario n o puede estar vacio')
        usuario.focus()
        return false;
    }
}