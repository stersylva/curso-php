<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $numero = $_GET['numero'];
    //$numero = isset($_GET["numero"])?$_GET["numero"]:1;
    echo "</br><h2>O número escolhido foi $numero </h2>";

    $con=1;
    $mult=1;

    while ($con<=10){
        $mult = $numero * $con;
        echo "$numero x $con = "."$mult</br>";
        $con++;
    }
?>
<a href="calculadora.php">voltar</a>
</body>
</html>
