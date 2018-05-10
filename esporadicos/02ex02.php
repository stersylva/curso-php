<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-*"/>
    <title></title>
</head>
<body>
<?php
    $inicio = $_GET['i'];
    $final = $_GET['f'];
    $incre = $_GET['s'];

    if ($inicio<=$final){
        while ($inicio<=$final){
            echo $inicio."</br>";
            $inicio += $incre;
        }
    }elseif($inicio > $final){
        while ($inicio>$final){
            echo $inicio."</br>";
            $inicio -= $incre;
        }
    }
?>
<a href="02ex.php">voltar</a>
</body>
</html>
