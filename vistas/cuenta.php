<?php
session_start();

if($_SESSION['session'] != true)
{
    header('Location: login.php');
}
else{
    if($_SESSION['tipoUsuario'] == 2)
    {
        header('Location: ../admin/admin.php');
    
    }
}
include './header.php';
?>

<link rel="stylesheet" href="../css/cuentaUsuario.css">


<div class="container pt-4">
    <div class="row">

        <style></style>
        <div class="col-12 col-md-8">
            <h1 class="col-md-8">Panel</h1>
            <div class="card" style="width: 16rem; height: 14rem;">
                <img src="../img/cuenta/subaru.jpeg" class="card-img-top" alt="..." style="height: 8rem;">
                <div class="card-body">
                    <p class="card-text" style="font-size: 15px;">
                        Comprar auto <br>
                        Explora nuestros modelos <br>
                        <a href="tu_enlace_aqui" style="font-size: 15px;">Comprar ahora</a>
                    </p>

                </div>
            </div>
            <!-- Contenido del panel -->
        </div>
    </div>
</div>