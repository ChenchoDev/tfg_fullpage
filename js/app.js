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