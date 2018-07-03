<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "style.css">
    <title>Freed Soul</title>
</head>
    <body>
        <?php echo file_get_contents("navbar.html"); ?><br>
        <div id = "initial" class = "txt1">
            Hi. This is my personal website.<br>
            I'll be exposing all my projects here.<br>
            You may access all codes in my github account above.<br>
            Cool, now I can use git LOL.<br><br>
            <div class = "dclose" onclick = "dclose('initial');">close</div>
        </div><br>
        <div id = "god">
            <img src = "god.png">
        </div>
        <div id = "cunha">
            <img src = "cunha.gif">
            <div class = "dclose" onclick = "dclose('cunha');">close</div>
        </div>
    <script src = "script.js"></script>
    </body>
</html>
