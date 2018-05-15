<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    function teste(&$x){
        $x +=2;
        echo "O valor de x e $x";
    }

    $a =3;
    teste($a);
    echo "<p>O valor de A e $a</p>";
?>
</body>
</html>
