<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $t = "Aqui é um texto grande criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
    $r = wordwrap($t,20, "<br/>\n");
    echo($r);

?>
</body>
</html>
