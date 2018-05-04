<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $dia = $_GET["dia"];

    switch ($dia){
        case 1;
        case 2;
        case 3;
        case 4;
        case 5;
            echo "Dia de aula";
            break;
        case 7;
        case 6;
            echo "Final de semana";
            break;
//        default:
//            echo"Dia da semana invalido";
    }
?>
</body>
</br>
    <a href="exercicio02.html">Voltar</a>
</html>
