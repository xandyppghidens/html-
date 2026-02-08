let count = 1;
document.getElementById("bola1").checked = true;

setInterval(function() {
    nextImage();
}, 2000);

function nextImage() {
    count++;
    if (count > 3) {
        count = 1;
    }
    document.getElementById("bola" + count).checked = true;
}