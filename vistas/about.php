<?php
include './header.php';
?>

<main class="mains">

<div class="cover">
            
            <div class="text__information-cover">
                <h1>Haz historia. No se limite a informar sobre ello.</h1>

                <p>Vaya más allá de informar sobre datos históricos. Utilice la inteligencia procesable de cada
                    evento digital para impactar positivamente en los resultados comerciales. Continuamente. En
                    tiempo real. A escala. Top Secret ha evolucionado a lo largo del tiempo:</p>
            </div>

            <div class="media__cover">
                <video src="../videos/animacion_cover.webm" autoplay playinline loop muted preload="auto"></video>
            </div>
        </div>

    <div class="contenedors">
        <div class="contenidos">
            <h1 class="skills-titleBLACK">Nuestra Visión</h1>
            <p class="section-description">Nuestro compromiso es ser la compañía más confiable en términos de movilidad y diseño de vehículos 
                inteligentes que ayuden a las personas a transportarse de manera libre y segura.</p>
        </div>
    </div>

    <div class="contenedors">
        <div class="contenidos">
            <h1 class="skills-titleBLACK">Negocio Fuerte</h1>
            <p class="section-description">¡Cumplimos 93 años en México! Desde 1925, mantenemos una sólida presencia en el país: <br>
            •Contamos con 8,700 empleados. <br>
            •Una planta de ensamble en Hermosillo y otra en Cuautitlán; tres fábricas de motores en Chihuahua y una planta de transmisiones en 
            Irapuato <br>
            •Un Centro de Ingeniería que emplea cerca de 1500 ingenieros</p>
        </div>
    </div>

        <div class="video-background">
        <video autoplay loop muted>
            <source src="../videos/acerca.mp4" type="video/mp4">
            Tu navegador no admite la etiqueta de video.
        </video>
        <div class="overlay"></div>

        <div class="content">
            <div class="heading-group">
                <p class="strapline-copy p-z">
                    <span>NUESTRO AMADO CREADOR</span>
                </p>
                <h2 class="secundary-head h2-z">
                    <span>Sin el, no estariamos aqui.</span>
                </h2>
            </div>
        </div>
    </div>

</main>

<script>
    document.getElementById("icon_menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){

    document.querySelector(".menu").classList.toggle("mostrar_menu");
    
}

window.onscroll = function () {
    var posicion = window.pageYOffset || document.documentElement.scrollTop;
    var elemento1 = document.getElementById("icon_heart");
    var elemento2 = document.getElementById("icon_fire");
    elemento1.style.bottom = posicion * 0.1 + "px";
    elemento2.style.top = posicion * 0.1 + "px";
}
</script>

<?php
include './footer.php';
?>