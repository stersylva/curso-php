<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e " . abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
    echo "<br/>A raiz de $v1 e ". sqrt($v1);
    echo "<br/>O valor de $v2 arredondado e " . round($v2);
    echo "<br/>A parte inteira de $v2 e ". intval($v2);
    echo "<br/> o valor monetário de $v2 e ". number_format($v2,2);
?>
</body>
</html>
