const botonMenu = document.querySelector('.boton-menu');
const enlacesNav = document.querySelector('.enlaces-nav');

botonMenu.addEventListener('click', () => {
    enlacesNav.classList.toggle('activo');
});

const formulario = document.querySelector('.formulario-contacto');

async function handleSubmit(event) {
    event.preventDefault();

    let estadoFormulario = document.getElementById('estado-formulario');
    if (!estadoFormulario) {
        estadoFormulario = document.createElement('div');
        estadoFormulario.id = 'estado-formulario';
        const boton = formulario.querySelector('button');
        boton.parentNode.insertBefore(estadoFormulario, boton.nextSibling);
    }

    const form = new FormData(event.target);

    try {
        estadoFormulario.textContent = 'Enviando...';
        estadoFormulario.className = 'enviando';

        const response = await fetch(event.target.action, {
            method: formulario.method,
            body: form,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            estadoFormulario.textContent = "¡Gracias! Tu mensaje ha sido enviado.";
            estadoFormulario.className = 'exito';
            formulario.reset();
            setTimeout(() => {
                estadoFormulario.textContent = '';
                estadoFormulario.className = '';
            }, 3000);
        } else {
            const data = await response.json();
            if (Object.hasOwn(data, 'errors')) {
                estadoFormulario.textContent = data["errors"].map(error => error["message"]).join(", ");
            } else {
                estadoFormulario.textContent = "Oops! Hubo un problema al enviar tu formulario.";
            }
            estadoFormulario.className = 'error';
        }
    } catch (error) {
        estadoFormulario.textContent = "Oops! Hubo un problema de conexión.";
        estadoFormulario.className = 'error';
    }
}

formulario.addEventListener("submit", handleSubmit);