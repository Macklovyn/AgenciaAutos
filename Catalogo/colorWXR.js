let redBtn = document.getElementById("red");
let blueBtn = document.getElementById("blue");
let blackBtn = document.getElementById("black");
let imgchangeWXR = document.getElementById("imgchangeWXR");

redBtn.onclick = function() {
    console.log("Red button clicked");
    imgchangeWXR.src = "../img/WxrRojo.jpg";
}

blueBtn.onclick = function() {
    console.log("Blue button clicked");
    imgchangeWXR.src = "../img/WxrAzul.jpg";
}

blackBtn.onclick = function() {
    console.log("Black button clicked");
    imgchangeWXR.src = "../img/WxrNegro.jpg";
}
