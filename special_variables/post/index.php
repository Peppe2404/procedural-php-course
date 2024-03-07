<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!-- mandiamo i dati POST alla pagina stessa (index.php) -->
  <form class="form" action="index.php" method="post">
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
//now let's make a POST request to plot 
    echo "<br>{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
//le chiamate POST sono sicure poichè i dati non si vedono nella URL quindi sono buone per le password"
?>