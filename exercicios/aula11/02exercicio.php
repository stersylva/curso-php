<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<div>
    <form method="get" action="02-parte2.php">
        <?php
        $c = 1;
        while ($c <= 5) {
           echo "Valor $c:<input type ='number' name ='v$c'
            max ='100' min ='0' value ='0' /></br >";
           $c++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>
<?php

?>
</body>
</html>
