<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
//calculo da raiz
<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é igual a ".number_format($rq,2);
?>
<br>
    <a href="01exercicio.html">Voltar</a>
</body>
</html>
