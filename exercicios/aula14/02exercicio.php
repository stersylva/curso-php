<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $v = isset($_GET['v'])?$_GET['v']:1;

    for ($s=1; $s<=10; $s++){
        $m = $v * $s;
        echo "$v x $s ="."$m </br>";
    }
?>
<a href="02exercicio02.php">voltar</a>
</body>
</html>
