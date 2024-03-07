<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!-- mandiamo i dati GET alla pagina stessa (index.php) -->
  <form class="form" action="index.php" method="get">
    <!-- creaiamo un form in html -->
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
  </form>

</body>
</html>

<?php
//now let's make a GET request to plot 
    echo "<br>{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";
//le chiamate GET non sono sicure poichè i dati si vedono nella URL ma sono buone per le ricerche"

?>