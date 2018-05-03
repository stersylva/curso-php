<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $a = 3;
    $b = "3";
    $r = ($a == $b)?"SIM":"NAO";
    echo "As variaveis A e B são iguais? $r";
    /*a é igual a b, porém a não é idêntica a b, porque para ser idênticas elas precisam ser iguais e do mesmo tipo
    para saber a diferença usasse o ===
    */
    $a = 3;
    $b = "3";
    $r = ($a === $b)?"SIM":"NAO";
    echo "</br>As variaveis A e B são idênticas? $r";

?>
</body>
</html>
