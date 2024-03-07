<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label><br>y:</label>
        <input type="text" name="y">
        <label><br>z:</label>
        <input type="text" name="z">
        <br><br>
        <input type="submit" value="total">
    </form>
    
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x); //valore assoluto
    //$total = round($x); //arrotonda
    //$total = floor($x); //arrotonda per difetto
    //$total = ceil($x); //arrotonda per eccesso
    //$total = pow($x, $y); //potenza
    //$total = sqrt($x); //radice quadrata
    //$total = sqrt($x); //radice quadrata
    $total = max($x, $y, $z); //massimo
    //$total = min($x, $y, $z); //minimo
    //$total = pi(); //pi greco
    //$total = rand(1, 6); //random range
    
    echo $total;

?>