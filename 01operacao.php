<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2 <br/>";
    $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
    //se o tipo for s ele vai somar se não ele vai multiplicar
    echo "O resultado será $r";

?>
</body>
</html>
