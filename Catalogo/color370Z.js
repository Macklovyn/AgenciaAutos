let redBtn = document.getElementById("red");
let blueBtn = document.getElementById("blue");
let blackBtn = document.getElementById("black");
let yellowBtn = document.getElementById("yellow");
let imgchange370Z = document.getElementById("imgchange370Z");

redBtn.onclick = function() {
    console.log("Red button clicked");
    imgchange370Z.src = "../img/370ZRojo.jpeg";
}

blueBtn.onclick = function() {
    console.log("Blue button clicked");
    imgchange370Z.src = "../img/370ZAzul.jpeg";
}

blackBtn.onclick = function() {
    console.log("Black button clicked");
    imgchange370Z.src = "../img/370ZNegro.jpeg";
}
yellowBtn.onclick = function() {
    console.log("Yellow button clicked");
    imgchange370Z.src = "../img/370ZAmarillo.jpeg";
}