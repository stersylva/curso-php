<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $p= "Leite";
    $pr = 4.5;
    echo "O $p custa R$".number_format($pr,2);
    printf("O %s custa R$ %.2f", $p, $pr);
?>
</body>
</html>
