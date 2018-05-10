<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $numero = isset($_GET["num"])?$_GET["num"]:0;
    $operacao = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($operacao){
        case 1:
            $resultado = $numero * 2;
            break;
        case 2:
            $resultado = pow($numero, 3);
            break;
        case 3:
            $resultado = sqrt($numero);
    }
    echo "O resultado da operação solicitada foi $resultado"
?>
</body>
</br>
    <a href="exercicio01.html">Voltar</a>
</html>
