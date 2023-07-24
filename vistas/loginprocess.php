<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "topsecret";

if ($_POST['type'] == 'registro') {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nombre, apellido, telefono, correo, usuario, contrasena, tipoUsuario)
    VALUES ('" . $_POST['nombre'] . "', '" . $_POST['apellido'] . "', '" . $_POST['telefono'] . "', '" . $_POST['correo'] . "', '" . $_POST['usuario'] . "', '" . sha1($_POST['conrasena']) . "', 1)";
        // use exec() because no results are returned
        $conn->exec($sql);
        session_start();
        $_SESSION['session'] = true;
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['apellido'] = $_POST['apellido'];
        $_SESSION['telefono'] = $_POST['telefono'];
        $_SESSION['correo'] = $_POST['correo'];
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['tipoUsuario'] = 1;

        header('Location:  cuenta.php');

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

if ($_POST['type'] == 'login') {
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE usuario='" . $_POST['usuario'] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['contrasena'] == sha1($_POST['clave'])) {
                session_start();
                $_SESSION['session'] = true;
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido'] = $row['apellido'];
                $_SESSION['telefono'] = $row['telefono'];
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['tipoUsuario'] = $row['tipoUsuario'];
                

                header('Location:  cuenta.php');
            } else {
                echo "error";
            }
        } else {
            echo "usuario no existe";
        }


    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}



$conn = null;
?>