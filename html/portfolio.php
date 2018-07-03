<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "style.css">
    <title>Freed Soul</title>
</head>
    <body>
        <?php echo file_get_contents("navbar.html"); ?><br>

        <div id = "color-palette" class = "txt1">
            Color Palette<br>
            Red <input class = "slider1" id = "red1" type = "range" value = 255 min = 0 max = 255 oninput = "update_test_color(this);"><br>
            Green <input class = "slider1" id = "green1" type = "range" value = 255 min = 0 max = 255 oninput = "update_test_color(this);"><br>
            Blue <input class = "slider1" id = "blue1" type = "range" value = 255 min = 0 max = 255 oninput = "update_test_color(this);"><br>
            Hold <input id = "hold1" type = "checkbox"> <div style = "display:inline-block;" id = "test-color">color</div>
        </div>

    <script src = "script.js"></script>
    </body>
</html>
