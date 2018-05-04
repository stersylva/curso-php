<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $estado = $_GET["select"];

    switch ($estado){
        case 1;
        case 2;
        case 3;
        case 4;
        case 5;
        case 6;
            echo "Região Norte";
            break;
        case 7;
        case 8;
        case 9;
        case 10;
        case 11;
        case 12;
        case 13;
        case 14;
        case 15;
            echo "Região Nordeste";
            break;
        case 16;
            echo "Região Centro-Oeste";
//        default:
//            echo"Dia da semana invalido";
    }
?>
</body>
</br>
    <a href="exercicio03.html">Voltar</a>
</html>
