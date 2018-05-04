<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>

</head>
<body>
<?php
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    echo "As sua notas foram $nota1 e $nota2";
    $media = ($nota1 + $nota2) / 2;
    echo "</br>sua media foi $media";

    if ($media >=7){
        $resultado = "<h2>Aprovado</h2>";
    }elseif ($media<=5){
        $resultado ="reprovado";
    }elseif ($media>5 && $media<7){
        $resultado = "recuperação";
    }
    echo "</br>E você está $resultado";
?>
</body>
</br>
    <a href="exercicio_calculoDaMedia.html">Voltar</a>
</html>
