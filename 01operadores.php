<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $preco = $_GET["x"];

    //10% do preço
    echo "<h2>O preço do produto é R$ $preco</h2>";
    $preco = $preco + ($preco*10/100);
    echo "<br/> E o novo preço com 10% de aumento é: R$ $preco";
    //com os operadores de atribuição
    $preco += $preco*10/100;
    echo "<br/> Com os operadores de atribução o codigo ficaria assim R$ $preco";
    //menos 10%
    $preco -= $preco*10/100;
    echo "<br/> E o novo preço com 10% de desconto é: R$ ".number_format($preco,2);

?>
</body>
</html>
