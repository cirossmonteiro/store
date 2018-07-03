function dclose(id) {
    document.getElementById(id).style.display = "none";
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

function update_test_color(col) {
    //alert("update");
    var elem = document.getElementById("test-color");
    var check = document.getElementById("hold1");
    var red, blue, green;
    if (check.checked == true) {
        document.getElementById("red1").value = col.value;
        document.getElementById("blue1").value = col.value;
        document.getElementById("green1").value = col.value;
    }
    red = parseInt(document.getElementById("red1").value).toString(16);
    blue = parseInt(document.getElementById("blue1").value).toString(16);
    green = parseInt(document.getElementById("green1").value).toString(16);
    if (red.length == 1)
        red = '0'+red;
    if (blue.length == 1)
        blue = '0'+blue;
    if (green.length == 1)
        green = '0'+green;
    var s = "#"+red+green+blue;
    s = s.toUpperCase();
    //alert(s);
    elem.style.color = s;
    elem.innerHTML = s;
}
