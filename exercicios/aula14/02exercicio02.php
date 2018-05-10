<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<form method="get" action="02exercicio.php">
    Escolha um número
    <select name="v">
        <?php
        for ($c=1; $c<=10; $c++){
            echo "<option value='$c'>$c</option>";
        }
        ?>
    </select>
    <input type="submit" value="calcular">
</form>
<?php

?>
</body>
</html>
