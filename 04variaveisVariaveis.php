<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $x = "abc";
    $$x = "def";
    echo "O conteudo da variavel x e $x";
    echo "</br>A variável criada recebeu o valor $abc";
    //abc passou a ser uma variavel por causa do $$ na frente do x
?>
</body>
</html>
