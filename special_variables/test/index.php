<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>insert quantity</label><br>
        <input type="text" name="quantity">
        <input type="submit" name="total">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 6.97;
    $total = null;
    $quantity = $_GET["quantity"];

    $total = $quantity * $price;

    echo "you ordered {$quantity} {$item} for a total of \${$total}";
    echo "<br><br> Yeeeee ce l'ho fatta da solo!!!"
?>

