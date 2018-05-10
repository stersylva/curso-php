<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    function soma($a, $b){
        $s = $a + $b;
        echo "<p>A soma é: $s </p>";
    }

    soma(3,4);
    soma(8,2);
    $x = 9;
    $y = 15;
    soma($x, $y);
?>
</body>
</html>
