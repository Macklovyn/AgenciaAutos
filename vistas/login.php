<link rel="stylesheet" href="login.css">
<body>
    <a href="../vistas/index.php" class="action_btn">Volver</a>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
        <form method="post" action="loginprocess.php">
                <h1>Crea tu cuenta</h1>
                <span>Ingresa los siguientes datos</span>
                <input type="text" name="nombre" placeholder="Nombre" />
                <input type="text" name="apellido" placeholder="Apellido" />
                <input type="text" name="telefono" placeholder="Telefono" />
                <input type="email" name="correo" placeholder="Correo" />
                <input type="text" name="usuario" placeholder="Usuario" />
                <input type="password" name="conrasena" placeholder="contraseña" />
                <input type="hidden" name="type" value="registro">
                <button type="submit">Registrar</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form method="post" action="loginprocess.php">
                <h1>Inicia Sesion</h1>
                
                <input type="text" name="usuario" placeholder="Correo" />
                <input type="password" name="clave" placeholder="Contraseña" />
                <input type="hidden" name="type" value="login">
                <button type="submit">Ingresar</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¿Ya tienes cuenta?</h1>
                    <p>Inicia sesion y disfruta de nuestra web</p>
                    <button class="ghost" id="signIn" onClick="openSignIn()">Iniciar Sesion</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¿No tienes cuenta?</h1>
                    <p>Ingresa tus datos y registrate</p>
                    <button class="ghost" id="signUp" onClick="openSignUp()">Crear cuenta</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    const container = document.getElementById('container');
    const signInEmail = document.getElementById('signInEmail');
    const signUpEmail = document.getElementById('signUpEmail');

    function openSignIn() {
        container.classList.remove("right-panel-active");
        if (signUpEmail.value !== "") {
            signInEmail.value = signUpEmail.value;
        }
    }

    function openSignUp() {
        container.classList.add("right-panel-active");
        if (signInEmail.value !== "") {
            signUpEmail.value = signInEmail.value;
        }
    }
</script>