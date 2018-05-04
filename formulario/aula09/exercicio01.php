<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a";
    echo "</br>Sua idade é $i";
    if ($i >=18){
        $v = "Já pode votar";
        $d = "Já pode dirigir";
    }else{
        $v = "Não pode votar";
        $d = "Não pode dirigir";
    }
    echo "</br>$v , $d";
?>
</body>
</br>
    <a href="exercicio01.html">Voltar</a>
</html>
