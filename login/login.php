
<link rel="stylesheet" href="../login/login.css">
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form>
                <h1>Crea tu cuenta</h1>
                <span>Ingresa los siguientes datos</span>
                <input type="text" placeholder="Nombre" />
                <input type="text" placeholder="Usuario" />
                <input type="email" id="signUpEmail" placeholder="correo" />
                <input type="password" placeholder="contraseña" />
                <button type="submit">Registrar</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form onSubmit={this.handleSubmitLogin}>
                <h1>Inicia Sesion</h1>
                
                <input type="email" id="signInEmail" placeholder="Correo" />
                <input type="password" placeholder="Contraseña" />
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