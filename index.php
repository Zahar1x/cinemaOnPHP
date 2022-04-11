<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

if(isset($_GET['type'])) {
    $type = $_GET['type'];
}
if(isset($_GET['num'])) {
    $num = $_GET['num'];
}
if(isset($_GET['title'])) {
    $title = $_GET['title'];
}
if(isset($_GET['color'])) {
    $color = $_GET['color'];
}

echo
'<canvas height="500" width="500" id="pic1">Обновите браузер</canvas>';

if($type == 1 && $num == 1) {
    echo "<title>$title</title>";
    echo
    "<script>
            let pic = document.getElementById(\"pic1\")
            picture = pic.getContext('2d')
    
            picture.strokeStyle = '#00FF00'
            picture.beginPath()
            picture.arc(200, 200, 25, 90, 280, true)
            picture.stroke()
            picture.closePath()
    
            picture.beginPath()
            picture.arc(200, 250, 25, 90, 230, true)
            picture.stroke()
            picture.closePath()
    
            picture.beginPath()
            picture.moveTo(275, 175)
            picture.lineTo(260, 250)
            picture.moveTo(275, 175)
            picture.lineTo(300, 175)
            picture.moveTo(300, 175)
            picture.lineTo(315, 250)
            picture.moveTo(260, 250)
            picture.lineTo(315, 250)
            picture.moveTo(260, 250)
            picture.lineTo(260, 270)
            picture.moveTo(315, 250)
            picture.lineTo(315, 270)
            picture.stroke()
            picture.closePath()
    
            picture.beginPath()
            picture.moveTo(340, 175)
            picture.lineTo(340, 270)
            picture.moveTo(340, 175)
            picture.lineTo(380, 255)
            picture.moveTo(380, 255)
            picture.lineTo(420, 175)
            picture.lineTo(420, 270)
            picture.stroke()
            picture.closePath()
    </script>";
}

if($type == 1 && $num == 2) {
    echo "<title>$title</title>";
    echo '<script>
        let pic = document.getElementById("pic1")
        picture = pic.getContext(\'2d\')
        function drawText(txt, x, y) {
            picture.font = \'50px Sans-serif\'
            picture.strokeStyle = \'pink\'
            picture.lineWidth = 4
            picture.strokeText(txt, x, y)
            picture.fillStyle = \'blue\'
            picture.fillText(txt, x, y)
        }
        drawText(\'З.Д.М.\', 100, 100)
    </script>';
}

if($type == 2 && $num  == 1 && $color == 1) {
    echo "<title>$title</title>";
    echo '<svg width="500" height="500">
        <circle cx="200" cy="200" r="30" fill="blue"/>
        <circle cx="200" cy="200" r="28" fill="white"/>
        <circle cx="200" cy="260" r="30" fill="blue"/>
        <circle cx="200" cy="260" r="28" fill="white"/>
        <rect x="170" y="200" width="30" height="50" style="fill: white"></rect>

        <line x1="270" y1="170" x2="260" y2="250" style="stroke: blue"/>
        <line x1="270" y1="170" x2="310" y2="170" style="stroke: blue"/>
        <line x1="310" y1="170" x2="320" y2="250" style="stroke: blue"/>
        <line x1="260" y1="250" x2="320" y2="250" style="stroke: blue"/>
        <rect x="250" y="250" width="80" height="30" style="fill: blue"/>
        <rect x="252" y="252" width="76" height="30" style="fill: white"/>

        <line x1="350" y1="170" x2="350" y2="280" style="stroke: blue"/>
        <line x1="350" y1="170" x2="380" y2="260" style="stroke: blue"/>
        <line x1="380" y1="260" x2="410" y2="170" style="stroke: blue"/>
        <line x1="410" y1="170" x2="410" y2="280" style="stroke: blue"/>
        </svg>';
}
if($type == 2 && $num  == 2 && $color == 1) {
    echo "<title>$title</title>";
    echo
    '<svg width="500" height="500">
        <text x="0" y="100"
            style="stroke: blue; font-family: Arial;
            font-size: 100pt; fill: white">
            З.Д.М.
        </text>
    </svg>';
}