<?php include '../admin/header.php'; ?>
<?php
include_once "../admin/conexion.php";

// Eliminar un registro de la tabla "usuario"
if (isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
    $idUsuarioEliminar = $_GET['eliminar'];
    $stmtEliminar = $bd->prepare("DELETE FROM usuario WHERE idUsuario = :idUsuario");
    $stmtEliminar->bindValue(':idUsuario', $idUsuarioEliminar, PDO::PARAM_INT);
    $resultado = $stmtEliminar->execute();

    // Redireccionar a la página actual después de eliminar
    header("Location: ../admin/clientes.php");
   
    exit();
}

$sentencia = $bd->query("SELECT idUsuario, nombre, apellido, telefono, correo
    FROM usuario
    WHERE tipoUsuario = 1;");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Lista de Clientes
                    </div>
                    <div class="p-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($personas as $persona) { ?>
                                    <tr>
                                        <td scope="row"><?php echo $persona->idUsuario; ?></td>
                                        <td><?php echo $persona->nombre; ?></td>
                                        <td><?php echo $persona->apellido; ?></td>
                                        <td><?php echo $persona->telefono; ?></td>
                                        <td><?php echo $persona->correo; ?></td>
                                        <td>
                                        <a class="btn btn-danger" href="?eliminar=<?php echo $persona->idUsuario; ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php include '../admin/footer.php'; ?>