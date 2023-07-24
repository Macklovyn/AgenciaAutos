<?php
include './header.php';
?>

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<main>
    <section>
        <div class="container-contacto">
            <h1 class="h1">Contacto</h1>
        </div>
    </section>
    <br>

    <div class="contenedors">
        <div class="contenidos">
            <h1 class="skills-titleBLACK">Contacto</h1>
            <p class="section-description">Si deseas ponerte en contacto con nosotros, por favor completa el formulario que está a continuación, 
                o comunícate al teléfono: 800 070 1010 de Lunes a Jueves de 08:00 a 17:00 hrs. y Viernes de 08:00 a 14:30 hrs.</p>
        </div>
    </div>

   <center>
    <div class="container">
        <header>Formulario de Contacto</header>
        <form action="#">
            <div class="form first">
                <div class="details personal">

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombres</label>
                            <input type="text" placeholder="Ingresa tu nombres" required>
                        </div>

                        <div class="input-field">
                            <label>Apellidos</label>
                            <input type="text" placeholder="Ingresa tus apellidos" required>
                        </div>

                        <div class="input-field">
                            <label>Telefono</label>
                            <input type="number" placeholder="Ingresa tu telefono" required>
                        </div>

                        <div class="input-field">
                            <label>Tipo de comentario</label>
                            <select required>
                                <option disabled selected>Selecciona uno</option>
                                <option>Comentario General</option>
                                <option>Sugerencia</option>
                                <option>Felicitación</option>
                                <option>Queja</option>
                                <option>Pregunta</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Comentario</label>
                            <input type="text" placeholder="Ingrese su comentario" required>
                        </div>
                    </div>
                </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    </center> 

    <div class="contenedors">
        <div class="contenidos">
            <p class="section-description">Todos los comentarios son tomados en cuenta. Por favor, sientete libre de comentarnos.</p>
        </div>
    </div>

    <script>
        const form = document.querySelector("form"),
            nextBtn = form.querySelector(".nextBtn"),
            backBtn = form.querySelector(".backBtn"),
            allInput = form.querySelectorAll(".first input");


        nextBtn.addEventListener("click", () => {
            allInput.forEach(input => {
                if (input.value != "") {
                    form.classList.add('secActive');
                } else {
                    form.classList.remove('secActive');
                }
            })
        })

        backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    </script>

</main>
<?php
include './footer.php';
?>