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
    if ($i<16){
        $tipoVoto = "Não vota";
    }elseif (($i>=16 && $i<18) || ($i > 65)){
            $tipoVoto = "opcional";
        }
        else{
            $tipoVoto = "voto Obrigatório";
        }

    echo "</br>$tipoVoto";
?>
</body>
</br>
    <a href="exercicio02.html">Voltar</a>
</html>
