<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $ano = $_GET["an"];
    $idade = 2014 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos";
    $tipo = ($idade>=18 && $idade<65)?"Voto":"Nao voto";
    echo "</br> $tipo";


?>
</body>
</html>
