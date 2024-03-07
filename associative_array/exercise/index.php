<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country"> 
        <input type="submit">

    </form>
</body>
</html>

<?php

//un associative array semplicemente associa (pairs) tramite il simbolo => (arrow) un valore (key) ad un altro (value)

    $capitals = array("USA"=>"Washington DC", 
                      "Japan"=>"Tokyo", 
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo "the capital is {$capital}";

?>