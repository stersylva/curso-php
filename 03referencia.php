<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";
    /* $a = 3;
    $b = &$a;
    $b += 5;
    ao colocar o & na frente do $a tudo o que b valer a tbm vai valer*/
?>
</body>
</html>
