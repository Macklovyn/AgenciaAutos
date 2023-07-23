let redBtn = document.getElementById("red");
let blueBtn = document.getElementById("blue");
let blackBtn = document.getElementById("black");
let imgchange = document.getElementById("imgchange");

redBtn.onclick = function() {
    console.log("Red button clicked");
    imgchange.src = "../img/BrzRojo.jpg";
}

blueBtn.onclick = function() {
    console.log("Blue button clicked");
    imgchange.src = "../img/BrzAzul.jpg";
}

blackBtn.onclick = function() {
    console.log("Black button clicked");
    imgchange.src = "../img/BrzNegro.jpg";
}
