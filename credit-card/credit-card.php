<link rel="stylesheet" href="./css/credit.css">
<div class="container">

    <div class="creditC-container">

        <div class="creditC-card-container">

            <div class="creditC-front">
                <div class="creditC-image">
                    <img src="/credit-card/image/chip.png" alt="">
                    <img src="/credit-card/image/visa.png" alt="">
                </div>
                <div class="creditC-card-number-box">################</div>
                <div class="creditC-flexbox">
                    <div class="creditC-box">
                        <span>card holder</span>
                        <div class="card-holder-name">Nombre Completo</div>
                    </div>
                    <div class="creditC-box">
                        <span>expires</span>
                        <div class="expiration">
                            <span class="exp-month">mm</span>
                            <span class="exp-year">yy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="creditC-back">
                <div class="creditC-stripe"></div>
                <div class="creditC-box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="image/visa.png" alt="">
                </div>
            </div>

        </div>

        <form action="">
            <div class="creditC-inputBox">
                <span>Numero de tarjeta</span>
                <input type="text" maxlength="16" class="card-number-input">
            </div>
            <div class="creditC-inputBox">
                <span>Nombre</span>
                <input type="text" class="card-holder-input">
            </div>
            <div class="creditC-flexbox">
                <div class="creditC-inputBox">
                    <span>Mes</span>
                    <select name="" id="" class="month-input">
                        <option value="month" selected disabled>mes</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="01">03</option>
                        <option value="02">04</option>
                        <option value="01">05</option>
                        <option value="02">06</option>
                        <option value="01">07</option>
                        <option value="02">08</option>
                        <option value="01">09</option>
                        <option value="02">10</option>
                        <option value="01">11</option>
                        <option value="02">12</option>
                        <!-- Resto de las opciones del mes -->
                    </select>
                </div>
                <div class="creditC-inputBox">
                    <span>Año</span>
                    <select name="" id="" class="year-input">
                        <option value="year" selected disabled>año</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2021">2023</option>
                        <option value="2022">2024</option>
                        <option value="2021">2025</option>
                        <option value="2022">2026</option>
                        <option value="2021">2027</option>
                        <option value="2022">2028</option>
                        <!-- Resto de las opciones del año -->
                    </select>
                </div>
                <div class="creditC-inputBox">
                    <span>cvv</span>
                    <input type="text" maxlength="4" class="cvv-input">
                </div>
            </div>
            <input type="submit" value="submit" class="creditC-submit-btn">
        </form>

    </div>

    <script>

        document.querySelector('.card-number-input').oninput = () => {
        document.querySelector('.creditC-card-number-box').innerText = document.querySelector('.card-number-input').value;
        }

        document.querySelector('.card-holder-input').oninput = () => {
        document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
        }

        document.querySelector('.month-input').oninput = () => {
        document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
        }

        document.querySelector('.year-input').oninput = () => {
        document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
        }

        document.querySelector('.cvv-input').onmouseenter = () => {
        document.querySelector('.creditC-front').style.transform = 'perspective(1000px) rotateY(-180deg)';
        document.querySelector('.creditC-back').style.transform = 'perspective(1000px) rotateY(0deg)';
        }

        document.querySelector('.cvv-input').onmouseleave = () => {
        document.querySelector('.creditC-front').style.transform = 'perspective(1000px) rotateY(0deg)';
        document.querySelector('.creditC-back').style.transform = 'perspective(1000px) rotateY(180deg)';
        }

        document.querySelector('.cvv-input').oninput = () => {
        document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
        }
        </script>