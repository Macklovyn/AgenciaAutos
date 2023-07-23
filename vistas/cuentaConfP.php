<?php
include './header.php';
?>

<link rel="stylesheet" href="../css/cuentaUsuario.css">


<div class="container pt-4">
    <div class="row">
        <aside class="col-12 col-md-4 pt-4">
            <div class="container mt-4">
                <ul class="list-unstyled list-unstyled-usuario">
                    <!-- Icono SVG personalizado con efecto hover -->
                    <li class="d-flex align-items-center">
                        <a href="./cuenta.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                            </svg>
                            <span class="ml-2">Panel</span>
                        </a>
                    </li>

                    <li class="mt-4">
                        <a href="./cuentaConfP.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="ml-2">Configuracion de perfil</span>
                        </a>
                    </li>

                    <li class="mt-4">
                        <a href="./cuentaPago.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                            </svg>
                            <span class="ml-2">Metodo de pago</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="col-12 col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nombre:</h5>
                                <p class="card-text"> </p>
                                <a href="#" class="">Editar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Numero de telefono: </h5>
                                <p class="card-text"> </p>
                                <a href="#" class="">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>