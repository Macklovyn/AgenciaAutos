<?php
include './header.php';
?>

<main>
  <section>
    <div class="container-security">
      <h1 class="h1">Seguridad y Mantenimiento</h1>
    </div>
  </section>
  <br>

  <div class="contenedors">
    <div class="contenidos">
      <h1 class="skills-titleBLACK">Seguridad de nuestros vehiculos</h1>
      <p class="section-description">En nuestra agencia de carros, la seguridad de nuestros clientes es una prioridad. Todos nuestros vehículos están equipados con características avanzadas de seguridad para brindar tranquilidad en cada viaje.</p>
    </div>
  </div>

  <div class="contenedors">
    <div class="contenidos">
      <h1 class="skills-titleBLACK">Seguridad e integridad de Top Secret</h3>
        <p class="section-description">En Top Secret, creemos que los vehículos son más que un medio para llegar a un destino. Para nosotros, los
          vehículos producen sueños, libertad y fantásticos momentos en la vida. Esto conlleva una responsabilidad primordial: garantizar que la
          vida no sólo del conductor y los pasajeros, sino de toda persona siga siendo segura. Por esa razón nunca puede haber un fin en la búsqueda
          y mejora de la seguridad. Proporcionar una forma segura de transporte en la vida de cada persona es un desafío que abrazamos cada día.
          Nuestros vehículos ofrecen amplia visibilidad y capacidad superior de conducción, a la vez que proporciona a los conductores tecnologías
          preventivas de seguridad avanzadas.</p>
    </div>
  </div>

  <div class="contenedors">
    <div class="contenidos">
      <h1 class="skills-titleBLACK">Precios 2023</h1>
      <div class="custom-container">
        <div class="custom-header">
          <h2 class="experience-date" style="color: #fff">¿Qué servicio te interesa?</h2>
          <div class="form-column custom-form-group">
            <label class="experience-position">Selecciona un servicio:</label>

            <div class="form-check">
              <input class="form-check-input" type="radio" value="" name="serviceType" value="distance" id="distanceService" checked>
              <label class="form-check-label" for="distanceService">
                Kilometraje/Distancia
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="" name="serviceType" value="brakes" id="brakesService">
              <label class="form-check-label" for="brakesService">
                Servicio de frenos
              </label>
            </div>

            <div class="form-group">
              <label class="experience-position">Selecciona tu carro:</label>
              <select id="carType" class="custom-input">
                <option value="1">SUBARU BRZ</option>
                <option value="2">SUBARU WXR</option>
                <option value="3">NISSAN GT-R</option>
                <option value="4">NISSAN 370Z</option>
                <!-- Agrega más opciones de carros según sea necesario -->
              </select>
            </div>
            <div class="form-group" id="distanceOptions">
              <label class="experience-position">Kilometraje:</label>
              <select id="distance" class="custom-input">
                <option value="1">1-30 km</option>
                <option value="2">31-60 km</option>
                <option value="3">61-90 km</option>
                <option value="4">91 o más km</option>
              </select>
            </div>
            <div class="form-group" id="brakesOptions" style="display:none;">
              <label class="experience-position">Tipo de frenos:</label>
              <select id="brakesType" class="custom-input">
                <option value="4">4 Ruedas</option>
                <option value="2">Delanteras</option>
                <option value="3">Traseras</option>
              </select>
            </div>
            <div class="custom-total-cost" id="totalCost">Costo aproximado: $0</div>
          </div>
        </div>
      </div>
      <br> 

      <section>
      <h3 class="skills-titleBLACK">Ofrecemos en nuestros vehiculos:</h3>
        <div class="contenedor">
            <div class="tabla">
                <h3>Sistema Avanzado de Frenado de Automovil</h3>
                <p>Tecnología para mejorar la respuesta y precisión del vehículo.</p>
                <a href="../vistas/frenado.php" class="boton">Conocer más</a>
            </div>
            <div class="tabla">
                <h3>Sistema de Control de Estabilidad de Auto</h3>
                <p>Tecnología para mejorar la estabilidad y control del vehículo.</p>
                <a href="../vistas/estabilidad.php" class="boton">Conocer más</a>
            </div>
            <div class="tabla">
                <h3>Airbags Frontales y Laterales de Automovil</h3>
                <p>Dispositivo de seguridad diseñados en caso de colisión.</p>
                <a href="../vistas/airbags.php" class="boton">Conocer más</a>
            </div>
            <div class="tabla">
                <h3>Tecnología de Alerta de Punto Ciego</h3>
                <p>Sistema de asistencia de conducción para la seguridad. </p>
                <a href="../vistas/puntoCiego.php" class="boton">Conocer más</a>
            </div>
        </div>
        </section>
        
        <br><br><br><br><br><br><br><br><br><br><br>

      <script>
        const distanceOptions = document.getElementById('distanceOptions');
        const brakesOptions = document.getElementById('brakesOptions');
        const carType = document.getElementById('carType');
        const distance = document.getElementById('distance');
        const brakesType = document.getElementById('brakesType');
        const totalCost = document.getElementById('totalCost');
        const distanceService = document.getElementById('distanceService');
        const brakesService = document.getElementById('brakesService');

        function calculateCost() {
          const carMultiplier = parseFloat(carType.value);
          let serviceCost = 0;

          if (distanceService.checked) {
            switch (distance.value) {
              case '1':
                serviceCost = 1120;
                break;
              case '2':
                serviceCost = 1340;
                break;
              case '3':
                serviceCost = 1490;
                break;
              case '4':
                serviceCost = 1675;
                break;
              default:
                serviceCost = 0;
            }
            brakesOptions.style.display = 'none';
            distanceOptions.style.display = 'block';
          } else if (brakesService.checked) {
            switch (brakesType.value) {
              case '4':
                serviceCost = 1400;
                break;
              case '2':
                serviceCost = 820;
                break;
              case '3':
                serviceCost = 670;
                break;
              default:
                serviceCost = 0;
            }
            distanceOptions.style.display = 'none';
            brakesOptions.style.display = 'block';
          }

          const total = carMultiplier * serviceCost;
          totalCost.textContent = `Costo aproximado: $${total}`;
        }

        document.querySelectorAll('input[name="serviceType"]').forEach(function(radio) {
          radio.addEventListener('change', function() {
            calculateCost();
          });
        });

        document.querySelectorAll('select').forEach(function(select) {
          select.addEventListener('change', calculateCost);
        });

        calculateCost(); // Calculamos el costo al cargar la página.
      </script>

</main>
<?php
include './footer.php';
?>