<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $v = isset($_GET["val"])?($_GET["val"]):0;
    echo "<h1> Calculando o fatorial de $v </h1>";

    $c = $v;
    $fat = 1;
    do{
        $fat = $fat*$c;
        $c--;
    }while($c>=1);
    echo "<h2>$v ! = $fat</h2>"

?>
<p>
    <a href="fatorial.html">Voltar</a></p>
</body>
</html>
