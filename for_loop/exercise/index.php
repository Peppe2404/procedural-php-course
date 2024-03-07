<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>enter a number to countdown from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php 

    $counter = $_POST["counter"];
//conto alla rovescia a partire dal valore inserito ($counter) 
    for($i = $counter; $i > 0; $i--){
        echo $i . "<br>";
    }
?>