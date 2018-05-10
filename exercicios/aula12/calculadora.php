<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h3>Tabuada</h3>
<form method="get" action="calculadora_01.php">
    <h2>Escolha um número</h2>
    <select name="numero">
        <?php
        $numero = 1;
        do{
            echo "<option value='$numero'>$numero</option>";
            $numero++;
        }while($numero<=10);
        ?>
    </select>
</form>
    <input type="button" value="multiplicar"/>

</body>
</html>