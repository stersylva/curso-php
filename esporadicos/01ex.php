<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<form method="get" action="01ex01.php">
    <?php
    $c=1;
    while ($c<=5){
        echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'/></br>";
        $c++;
    }
    ?>
    <input type="submit" name="verificar"/>
</form>
</body>
</html>
