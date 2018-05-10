<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>

<?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
    $idade = date("Y") - $ano;

    echo "Seu nome é: $nome </br> ";
    echo "Seu ano de Nascimento é: $ano</br>";
    echo "Seu Sexo é $sexo</br>";
    echo "Sua idade é $idade";
?>
<br>
    <a href="02exercicio.html">Voltar</a>
</body>
</html>
