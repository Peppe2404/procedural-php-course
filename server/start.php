<!-- 
$_SERVER = è una super global variable (SGB) come POST, GET, SESSION etc...
contiene le posizioni informazioni sugli headers, i percorsi e la posizione degli script
i dati di questo array vengono creati dal web server direttamente
mostra praticamente tutto ciò che c'è da sapere sull ambiente di navigazione 
della pagina corrente 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--ora creiamo un form ma anzichè mandare i dati al solito index.php
    manderemo i dati all'effettivo file del momento che potrebbe avere un altro nome
    in questo caso, nell'array $_SERVER, la variabile creata dal server
    chiamata PHP_SELF, indica il nome esatto del file della pagina corrente in navigazione 
    aggiungiamo anche un filtro htmlspecialchars poichè
    PHP_SELF è vulnerabile ad attachi di tipo cross-side script 
    In questo modo possiamo rinominare il file della pagina senza preoccuparci 
    ogni volta di aggiornare a mano la proprietà action nel form -->

        <form action="<?php htmlspecialchars(($_SERVER["PHP_SELF"]))?>" method="post">
        USERNAME: <br>
        <input type="text" name="username"><br>
        PASSWORD: <br>
        <input type="text" name="password"><br>
        <input type="submit" name="login"><br>
    </form>
</body>
</html>

<?php 

/*
//mostriamo tutte le chiavi e valori della SGB $_SERVER

foreach($_SERVER as $key => $value){ 
    echo "{$key} = {$value} <br> "; 
}
*/


// stampiamo il valore di PHP_SELF
echo $_SERVER["PHP_SELF"] . "<br>";

?>

