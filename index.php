<?php
require "./include/header.php";
?>

    <section class="hero">
        <div class="contenido_hero">
            <header>
                <h1>Brayan Hernández <br> <span>Aprendiz y desarrollador web</span></h1>
            </header>
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c9de00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" />
                </svg>
                <p>Sena, Saravena</p>
            </div>
            <a href="https://api.whatsapp.com/send?phone=3213858791&amp;text=Desde%20Sitio%20Web%20Brayan%20Hernandez" target="_blank" class="btncontactar">Contactar</a>
        </div>
    </section>

    <main class="container">
        <h2>Mis habilidades</h2>
        <div class="habilidades">
            <section class="habilidad">
                <h3>HTML</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-html5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" />
                        <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                    </svg>
                </div>
                <p>HTML es el lenguaje de marcado que se utiliza para estructurar el contenido de las páginas web. Define la estructura y el contenido mediante una serie de elementos y etiquetas. Cada elemento HTML tiene una función específica, desde definir encabezados, párrafos y enlaces, hasta incorporar imágenes y formularios.</p>
            </section>

            <section class="habilidad">
                <h3>CSS</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-css3" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" />
                        <path d="M8.5 8h7l-4.5 4h4l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                    </svg> 
                </div>
                <p>CSS es el lenguaje que se utiliza para definir la apariencia y el diseño de las páginas web. Permite a los desarrolladores aplicar estilos, como colores, fuentes y disposiciones a los elementos de HTML. CSS se puede aplicar de tres maneras: en línea en una etiqueta, en un archivo interno o en un archivo externo.</p>
            </section>
            
            <section class="habilidad">
                <h3>JavaScript</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-javascript" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z" />
                        <path d="M7.5 8h3v8l-2 -1" />
                        <path d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                    </svg>
                </div>
                <p>JavaScript es un lenguaje de programación que se utiliza para crear interactividad en las páginas web. Permite a los desarrolladores añadir funcionalidades dinámicas, como la manipulación de elementos del DOM, la validación de formularios y la interacción con el usuario.</p>
            </section>
        </div>
    </main>

    <?php 
    include 'include/footer.php';