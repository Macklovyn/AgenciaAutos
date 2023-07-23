let redBtn = document.getElementById("red");
let blueBtn = document.getElementById("blue");
let blackBtn = document.getElementById("black");
let imgchangeGTR = document.getElementById("imgchangeGTR");

redBtn.onclick = function() {
    console.log("Red button clicked");
    imgchangeGTR.src = "../img/GtrRojo.png";
}

blueBtn.onclick = function() {
    console.log("Blue button clicked");
    imgchangeGTR.src = "../img/GtrAzul.webp";
}

blackBtn.onclick = function() {
    console.log("Black button clicked");
    imgchangeGTR.src = "../img/GtrNegro.webp";
}
