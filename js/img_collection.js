var images = [];
var index = 0;
var numImages = 10;

for (var i = 0; i < numImages; i++) {
    images[i] = new Image();
    images[i].src = "./images/slideshow" + i + ".jpg";
}

function updateImageInfo() {
    document.getElementById("image-index").textContent = index + 1;
    document.getElementById("total-images").textContent = images.length;
}

function next() {   
    var prevIndex = index;

    index = (index + 1) % images.length;

    document.getElementById("image").style.opacity = 0;
    document.getElementById("image").style.transform = index > prevIndex ? "translateX(100%)" : "translateX(-100%)";

    setTimeout(function() {
        document.getElementById("image").src = images[index].src;
        updateImageInfo();
        document.getElementById("image").style.opacity = 1;
        document.getElementById("image").style.transform = "translateX(0)";
    }, 500);
}

function prev() {
    var prevIndex = index;

    index = (index - 1 + images.length) % images.length;

    document.getElementById("image").style.opacity = 0;
    document.getElementById("image").style.transform = index > prevIndex ? "translateX(100%)" : "translateX(-100%)";

    setTimeout(function() {
        document.getElementById("image").src = images[index].src;
        updateImageInfo();
        document.getElementById("image").style.opacity = 1;
        document.getElementById("image").style.transform = "translateX(0)";
    }, 500);
}

updateImageInfo();
// setInterval(next, 5000);