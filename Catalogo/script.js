console.log("Hola");

document.addEventListener("DOMContentLoaded", function() {
    var barraNav = document.querySelector(".barranav");

    function cambiarPosicion() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > navOffset) {
            barraNav.style.position = "fixed";
            barraNav.style.top = "0";
        } else {
            barraNav.style.position = "static";
        }
    }

    var navOffset = barraNav.offsetTop;
    cambiarPosicion();

    window.addEventListener("scroll", cambiarPosicion);
});
