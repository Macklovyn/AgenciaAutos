
<?php 
include './header.php';
?>
    <div class="float-button">
        <a href="" class="float-button-link"></a>
    </div>
    <!--Aqui empieza video nissan z -->
    <div class="video-background">
        <video autoplay loop muted>
            <source src="../videos/nissan370z.mp4" type="video/mp4">
            Tu navegador no admite la etiqueta de video.
        </video>
        <div class="overlay overlay-1"></div>

        <div class="content">
            <div class="heading-group">
                <p class="strapline-copy p-z">
                    <span>EL SAMURAI ABSOLUTO YA ESTÁ EN LAS CALLES</span>
                </p>
                <h2 class="secundary-head h2-z">
                    <span>NUEVO NISSAN Z</span>
                </h2>
            </div>
            <div>
                <a href="../Catalogo/nissan370Z.php" class="custom-link">
                    <div class="d-flex w-70 justify-content-between">
                        <h5 class="mb-1">CONOCE A NISSAN Z</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--Aqui acaba video nissan z -->

    <section>
        <div class="container">
            <div class="p-4 ">
                <h2 class="title-main text-center font-weight-bold">Conoce nuestros autos</h2>
            </div>

        </div>


        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/carrusel-/1.jpg" class="d-block" alt="Imagen 1"
                            width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/carrusel-/2.jpg" class="d-block" alt="Imagen 2"
                            width="100%">
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </a>
            </div>
        </div>

    </section>

    <?php 
include './footer.php';
?>