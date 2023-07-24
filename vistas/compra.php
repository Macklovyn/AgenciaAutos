<?php 
include '../vistas/header.php';
?>
<link rel="stylesheet" href="../css/compra.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
   <div class="wrapper">
        <aside class="aside">
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <nav>
                <ul>
                    <li>
                        <a class="boton-menu boton-volver" href="./index.html">
                            <i class="bi bi-arrow-return-left"></i> Seguir comprando
                        </a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito active" href="./carrito.html">
                            <i class="bi bi-cart-fill"></i> Carrito
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="main">
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                

                <div id="carrito-productos" class="carrito-productos disabled">
                    <!-- Esto se va a completar con el JS -->
                </div>
                <div>
                    <h4>Método de pago</h4>
                    <h6>Tarjetas Registradas:</h6>
                    <select name="" id="" >
                        <option value="op1">oP1</option>
                        <OPtion value="op2">op2</OPtion>
                    </select>
                </div>
                <div>
                    <button ><a href="./cuentaPago.php">Agregar Tarjeta</a></button>
                </div>
                <div id="carrito-acciones" class="carrito-acciones ">
                    <div class="carrito-acciones-izquierda">
                        <button id="carrito-acciones-vaciar" class="carrito-acciones-vaciar">Vaciar carrito</button>
                    </div>
                    <div class="carrito-acciones-derecha">
                        <div class="carrito-acciones-total">
                            <p>Total:</p>
                            <p id="total">$3000</p>
                        </div>
                        <button id="carrito-acciones-comprar" class="carrito-acciones-comprar">Comprar ahora</button>
                    </div>
                </div>

                <p id="carrito-comprado" class="carrito-comprado disabled">Muchas gracias por tu compra. <i class="bi bi-emoji-laughing"></i></p>

            </div>
        </main>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<?php 
include '../vistas/footer.php';
?>