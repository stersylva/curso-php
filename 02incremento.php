<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $atual = $_GET["aa"];
    echo "O ano atual é $atual";
    //exercicio do ano anterio ao atual
    echo "O ano anterior é $atual e o ano anterior é ".--$atual; #teste

?>
</body>
</html>
