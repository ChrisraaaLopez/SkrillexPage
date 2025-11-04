document.addEventListener('DOMContentLoaded', () => {

    const botonMenu = document.querySelector('.boton-menu');
    const enlacesNav = document.querySelector('.enlaces-nav');

    const alternarMenu = () => {
        enlacesNav.classList.toggle('activo');
        botonMenu.classList.toggle('activo');
    };

    botonMenu.addEventListener('click', alternarMenu);

    document.querySelectorAll('.enlaces-nav a').forEach(enlace => {
        enlace.addEventListener('click', () => {

            if (enlacesNav.classList.contains('activo')) {
                alternarMenu();
            }
        });
    });
});