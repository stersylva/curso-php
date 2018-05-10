<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<form method="get" action="02ex02.php">
    <h2>Digite o numero inicial</h2>
    <input type="number" name="i" value="0"/>
    <h2>Digite o numero final</h2>
    <input type="number" name="f" value="0"></br>
    <h2>Escolha o incremento ou decremento</h2>
    <select name="s">
    <?php
    $s=1;
    while ($s<=5){
        echo "<option value='$s'>$s</option>";
        $s++;
    }
    ?>
        <input type="submit" value="Calcular">

</form>
</body>
</html>
