<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $n1 = 3;
    $n2 = 2;
    $s = $n1 + $n2;
    $m = ($n1 + $n2) / 2;

    echo "A soma $n1 + $n2 = $s";
    echo "<br/>A subitração vale ".($n1-$n2);
    echo "<br/>A multiplicação vale ".($n1*$n2);
    echo "<br/>A divisão vale ".($n1/$n2);
    echo "<br/>O modulo vale ".($n1%$n2);
    echo "</br>A media vale $m";
    $n3 = $_GET["a"];
    $n4 = $_GET["b"];
    echo "<h2>valores recebidos: $n3 e $n4 </h2>"

?>
</body>
</html>
