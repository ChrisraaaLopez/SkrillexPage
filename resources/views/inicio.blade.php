<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrillex - Sitio Oficial</title>

    <link rel="icon" type="image/png" href="sources/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">

    @vite(['resources/css/estilo_index.css', 'resources/js/script_index.js'])
</head>

<body>

    <!-- Header / Menu -->
    <header class="barra-navegacion">
        <div class="contenedor">
            <a href="{{route('inicio')}}" class="contenedor-logo">
                <img src="sources/logo.png" alt="Logo de Skrillex" class="imagen-logo">
                <span class="texto-logo">SKRILLEX</span>
            </a>

            <nav class="enlaces-nav">
                <ul>
                    <li><a href="{{route('inicio')}}" class="activo">Home</a></li>
                    <li><a href="{{route('galeria')}}">Galería</a></li>
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
        <!-- Hero, Album Reciente -->
        <section class="portada">
            <div class="portada-superpuesta"></div>
            <div class="portada-contenido">
                <h1 class="efecto-glitch" data-text="QUEST FOR FIRE">QUEST FOR FIRE</h1>
                <p>El nuevo álbum. Ya disponible.</p>
                <a href="https://open.spotify.com/album/7tWP3OG5dWphctKg4NMACt" class="boton boton-primario" target="_blank">ESCUCHAR AHORA</a>
            </div>
        </section>

        <!-- Ultimo Lanzamiento -->
        <section class="ultimo-lanzamiento contenedor">
            <h2>ÚLTIMO LANZAMIENTO</h2>
            <div class="cuadricula-lanzamiento">
                <img src="https://m.media-amazon.com/images/I/416AZgJQIEL._UX358_FMwebp_QL85_.jpg" alt="Portada del nuevo sencillo de Skrillex">
                <div class="info-lanzamiento">
                    <h3>SINGLE: "Fine Day Anthem"</h3>
                    <p>El regreso a los sonidos que definieron una era, con un toque fresco. Escúchalo en todas las plataformas.</p>
                    <div class="enlaces-plataformas">
                        <a href="https://open.spotify.com/track/6tifCCTIVBLC2TmTquYG7G" class="boton boton-secundario" target="_blank">Spotify</a>
                        <a href="https://music.apple.com/us/album/fine-day-anthem-single/1695245126" class="boton boton-secundario" target="_blank">Apple Music</a>
                        <a href="https://www.youtube.com/watch?v=4uGGhQU6ahM" class="boton boton-secundario" target="_blank">YouTube</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fechas proximas y Boletos -->
        <section class="fechas-tour">
            <div class="contenedor">
                <h2>PRÓXIMAS FECHAS</h2>
                <ul class="lista-tour">
                    <li>
                        <span class="fecha">OCT 28</span>
                        <span class="lugar">RED ROCKS AMPHITHEATRE</span>
                        <span class="ubicacion">MORRISON, CO</span>
                        <a href="#" class="boton-boleto agotado" target="_blank">AGOTADO</a>
                    </li>
                    <li>
                        <span class="fecha">NOV 12</span>
                        <span class="lugar">受付方法</span>
                        <span class="ubicacion">UTASHINAI, JP</span>
                        <a href="https://l-tike.com/order/?gLcode=53723&gEntryMthd=02&gScheduleNo=1&clickref=1011lBHfAAfa" class="boton-boleto" target="_blank">BOLETOS</a>
                    </li>
                    <li>
                        <span class="fecha">NOV 20</span>
                        <span class="lugar">NYEGE FESTIVAL</span>
                        <span class="ubicacion">OVERLAND, KF</span>
                        <a href="https://ra.co/events/2212282?sharedId=&subId1=&subId3=6PXZ9zZsdEVI6d2OYOQ7Ng&partnerId=residentadvisor" class="boton-boleto" target="_blank">BOLETOS</a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer/ Redes Sociales -->
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