<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrillex - Contacto</title>

    <link rel="icon" type="image/png" href="sources/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">

    @vite(['resources/css/estilo_index.css', 'resources/css/estilo_contacto.css', 'resources/js/script_index.js', 'resources/js/script_contacto.js'])
</head>

<body>

    <header class="barra-navegacion">
        <div class="contenedor">
            <a href="index.html" class="contenedor-logo">
                <img src="sources/logo.png" alt="Logo de Skrillex" class="imagen-logo">
                <span class="texto-logo">SKRILLEX</span>
            </a>

            <nav class="enlaces-nav">
                <ul>
                    <li><a href="{{route('inicio')}}">Home</a></li>
                    <li><a href="{{route('galeria')}}">Galería</a></li>
                    <li><a href="{{route('contacto')}}" class="activo">Contacto</a></li>
                </ul>
            </nav>

            <div class="boton-menu">
                <div class="barra"></div>
                <div class="barra"></div>
                <div class="barra"></div>
            </div>
        </div>
    </header>

    <main>
        <section class="contenedor-contacto">
            <h2>Contacto</h2>
            <p class="subtitulo-contacto">Para bookings, prensa o consultas generales.</p>

            <form class="formulario-contacto" action="https://formspree.io/f/xkgqevlk" method="POST">

                <div class="campo-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="campo-formulario">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="campo-formulario">
                    <label for="asunto">Asunto</label>
                    <select id="asunto" name="asunto">
                        <option value="general">Consulta General</option>
                        <option value="booking">Booking / Contratación</option>
                        <option value="prensa">Prensa</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo-formulario">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="6" required></textarea>
                </div>

                <div class="campo-formulario">
                    <button type="submit" class="boton boton-primario">Enviar Mensaje</button>
                </div>

            </form>
        </section>
    </main>

    <footer>
        <div class="contenedor">
            <div class="enlaces-sociales">
                <a href="https://open.spotify.com/artist/5he5w2lnU9x7JFhnwcekXX" target="_blank">Spotify</a>
                <a href="https://www.instagram.com/skrillex/" target="_blank">Instagram</a>
                <a href="https://www.youtube.com/channel/UC_TVqp_SyG6j5hG-xVRy95A" target="_blank">YouTube</a>
                <a href="https://x.com/skrillex?lang=de" target="_blank">X (Twitter)</a>
                <a href="https://soundcloud.com/skrillex" target="_blank">SoundCloud</a>
            </div>
            <a href="https://github.com/ChrisraaaLopez/Skrillex-Web-Page" target="_blank">
                <p>&copy; 2025 Skrillex. Todos los derechos reservados.</p>
            </a>
        </div>
    </footer>

</body>

</html>