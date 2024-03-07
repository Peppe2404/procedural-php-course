<!-- per evitare di subire iniezioni di codice trmite gli input come username, mails etc...
possiamo sanificare con dei filtri i valori inseriti dall'utente -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
    
</body>
</html>
    
<?php
    if(isset($_POST["login"])){

        //$username = $_POST["username"]; 
    //filtriamo il campo username per evitare iniezioni di codice
    //utilizziamo un filtro che sanifica i caratteri speciali trasformandoli in caratteri innocui che non permetteranno l'esecuzione del codice
        //$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    //e un filtro che conserva solo i numeri interi in una stringa
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    //e un filtro che rimuove alcuni caratteri dalla mail tipo <> e altri ma non tutti
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        //echo "Hello {$username} you are {$age} yo and your email is {$email}";}
    //
        if(empty($age)){
            echo "that number wasn't valid";
        }
        else {
            echo "you are $age yo";
        }
    }
?>