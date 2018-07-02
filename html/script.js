function close() {
    alert("close");
    document.getElementById("initial").style.display = "none";
}

function animation_god() {
    var elem = document.getElementById("god");
    elem.style.display = "block";
    var posx = 400;
    var posy = 0;
    var id = setInterval(frame, 1);
    function frame () {
        if (posx == 0) {
            clearInterval(id);
            elem.style.display = "none";
        }
        else {
            posx--;
            elem.style.left = posx+'px';
            elem.style.top = posy+'px';
        }
    }
}

function open_cunha() {
    var elem = document.getElementById("cunha");
    elem.style.display = "block";
}
