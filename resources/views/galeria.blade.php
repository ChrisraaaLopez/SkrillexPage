<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrillex - Galería</title>

    <link rel="icon" type="image/png" href="sources/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">

    @vite(['resources/css/estilo_index.css', 'resources/css/estilo_galeria.css', 'resources/js/script_index.js'])
</head>

<body>

    <header class="barra-navegacion">
        <div class="contenedor">
            <a href="{{route('inicio')}}" class="contenedor-logo">
                <img src="sources/logo.png" alt="Logo de Skrillex" class="imagen-logo">
                <span class="texto-logo">SKRILLEX</span>
            </a>

            <nav class="enlaces-nav">
                <ul>
                    <li><a href="{{route('inicio')}}">Home</a></li>
                    <li><a href="{{route('galeria')}}" class="activo">Galería</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
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
        <section class="contenedor-galeria">
            <h2>Galería de Shows</h2>
            <p class="subtitulo-galeria">Momentos capturados en vivo alrededor del mundo.</p>

            <div class="grid-galeria">

                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen1.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen2.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen3.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen4.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen5.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen6.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen7.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen8.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen9.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen10.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen11.webp')}}" alt="Skrillex en vivo show">
                </div>
                <div class="item-galeria">
                    <img src="{{asset('sources/Galeria/Imagen12.webp')}}" alt="Skrillex en vivo show">
                </div>

            </div>
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