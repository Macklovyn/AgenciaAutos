<?php
include '../vistas/header.php';
?>
<div class="barranav">
    <nav>
        <ul class="nav-links">
            <ol>
                <p>A partir de</p>
            </ol>
            <ol class="barranavLi">$739,000.00</ol>
            <li><a href="#">Especificaciones</a></li>
            <li><a href="./desempeñoBRZ.php">Desempeño</a></li>
        </ul>
    </nav>
    <a class="btn" href="../vistas/compra.php"><button>Comprar</button></a>
</div>
<main>
    <section>
        <div class="container-portadaBRZ">
            <h1 class="h1">Subaru BRZ 2023</h1>
        </div>
    </section>
    <section class="section">
        <div class="container-texto">
            <h4 class="section-title">MANTENTE CERCA DE LO QUE IMPORTA</h4>
            <p class="section-description">La vida no puede ser únicamente trabajo y nada de diversión. Con una experiencia de conducción deportiva,
                el totalmente nuevo SUBARU BRZ fue diseñado para traer alegría a tu vida todos los días.</p>
            <br><br>
            <h4 class="section-title">Exclusivo Motor Boxer de 2.4L de nueva generación</h4>
            <p class="section-description">La nueva generación del motor SUBARU Boxer 2.4L con el que viene equipado el totalmente nuevo
                SUBARU BRZ, es un motor inteligente con tecnología de inyección directa de combustible que maximiza el rendimiento de este.
            </p>

            <h4 class="section-title">Estabilidad + Control + Dinamismo</h4>
            <p class="section-description">Debido a que el motor se encuentra desplazado hacia atrás, el nuevo SUBARU BRZ tiene una mayor estabilidad, dinamismo y mayor precisión en el control de curvas,
                generando una sensación muy placentera que hace sentir el vehículo ágil y fácil de conducir.
            </p>

            <h4 class="section-title">Alta visibilidad</h4>
            <p class="section-description">El auto que transmite pasión al conducir inspira seguridad. Su audaz diseño interior ofrece extraordinarias vistas desde todos los ángulos,
                ayudando a obtener un mayor control del entorno.
            </p>
            <br><br>

        </div>
    </section>
    <section>
        <br><br><br><br><br><br><br>
        <div class="container-Colores">
        <h4 class="section-title">Colores disponibles:</h4>
            <div class="color-select">
                <div id="red"></div>
                <div id="blue"></div>
                <div id="black"></div>
            </div>
            <div class="images">
                <img src="../img/BrzAzul.jpg" id="imgchange" alt="">
            </div>
        </div>
        <br><br><br> 
    </section>
    <section>
        
        <div class="galeria">
            <h4 class="section-title">Más imágenes:</h4>
            <div class="linea"></div>
            <div class="contenedor-GaleriaAuto">
                <div class="imagenGA">
                    <img src="../img/BRZ1.jpg" alt="" class="gallery-img">
                    <div class="overlay overlay-2">
                        <h5>Pulsa aquí</h5>
                    </div>
                </div>
                <div class="imagenGA">
                    <img src="../img/BRZ2.jpg" alt="" class="gallery-img">
                    <div class="overlay overlay-2">
                        <h5>Pulsa aquí</h5>
                    </div>
                </div>
                <div class="imagenGA">
                    <img src="../img/BRZ3.jpg" alt="" class="gallery-img">
                    <div class="overlay overlay-2">
                        <h5>Pulsa aquí</h5>
                    </div>
                </div>
                <div class="imagenGA">
                    <img src="../img/BRZ4.jpg" alt="" class="gallery-img">
                    <div class="overlay overlay-2">
                        <h5>Pulsa aquí</h5>
                    </div>
                </div>
                <div class="imagenGA">
                    <img src="../img/BRZ5.jpg" alt="" class="gallery-img">
                    <div class="overlay overlay-2">
                        <h5>Pulsa aquí</h5>
                    </div>
                </div>
                <div class="imagenGA">
                    <img src="../img/BRZ6.jpg" alt="" class="gallery-img">
                    <div class="overlay overlay-2">
                        <h5>Pulsa aquí</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="../Catalogo/colorBRZ.js"></script>
<?php
include '../vistas/footer.php';
?>