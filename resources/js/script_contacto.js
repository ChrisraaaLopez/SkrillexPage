// Contenido de resources/js/script_contacto.js

// Busca el formulario: .formulario-contacto
const formulario = document.querySelector('.formulario-contacto');

// Asegúrate de que TODA la lógica esté dentro de esta verificación IF.
if (formulario) {

    // Función que maneja el envío asíncrono (AJAX)
    async function handleSubmit(event) {
        event.preventDefault();

        // **Asegúrate de que 'estado-formulario' no esté causando el error**
        let estadoFormulario = document.getElementById('estado-formulario');
        if (!estadoFormulario) {
            estadoFormulario = document.createElement('div');
            estadoFormulario.id = 'estado-formulario';
            const boton = formulario.querySelector('button');
            // Verifica que el botón exista antes de insertar, aunque es muy probable
            if (boton) {
                boton.parentNode.insertBefore(estadoFormulario, boton.nextSibling);
            } else {
                formulario.appendChild(estadoFormulario);
            }
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

    // Conecta la función al evento 'submit'
    formulario.addEventListener("submit", handleSubmit);

}
// FIN de la verificación IF