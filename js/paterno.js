const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');
    
toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open');
    const isOpen = dropDownMenu.classList.contains('open');

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars';
};

document.addEventListener('DOMContentLoaded', function() {
const fadeText = document.querySelector('#fadeText');

function fadeIn() {
fadeText.style.opacity = '1';
}

function fadeOut() {
fadeText.style.opacity = '0';
}

setInterval(function() {
fadeIn();
setTimeout(fadeOut, 1000); // FadeOut después de 1 segundo
}, 2000); // Repetir cada 2 segundos
});

/*boton arriba*/
const btn_scrolltop = document.getElementById("btn_scrolltop")
btn_scrolltop.addEventListener('click', () => {
  window.scrollTo(0, 0)
})

window.onscroll = () => {
add_btn_scrolltop()
}

const add_btn_scrolltop = () => {
if (window.scrollY < 300) {
  btn_scrolltop.classList.remove("btn-scrolltop-on")
} else {
  btn_scrolltop.classList.add("btn-scrolltop-on")
}
}