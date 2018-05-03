<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php

    //calculo da media
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A media entre $nota1 e $nota2 é $m <br/>";
//    $sit = ($m<6)?"Reprovado":"Aprovado";
//    echo "$sit";
    //fazendo com concatenação
    echo "A situação do aluno é ".(($m<6)?"reprovado":"aprovado");

?>
</body>
</html>
