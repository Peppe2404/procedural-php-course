<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php
    /*
    foreach($_POST as $key => $value){
        echo"<br>{$key} = {$value}";
    }
    */

    if(isset($_POST["login"])){ //quando viene premuto login (o meglio quando il parametro login diventa true)
        
        $username = $_POST["username"]; //quello che viene inserito in username sarà la variabile $username
        $password = $_POST["password"];//quello che viene inserito in password sarà la variabile $password

        //echo "<br> username is: {$username}<br>"; //stampa frase e variabile $username
        //echo "password is: {$password}<br>"; //stampa frase e variabile $password


        if(empty($username)){ //se la variabile $username è nulla o falsa
            echo "username is missing"; //scrivi questo
        }
        elseif(empty($password)){ //se la variabile $password è nulla o falsa
            echo "password is missing homie"; //scrivi questo
        }
        else{ //altrimenti (se non ci sono variabili false o nulle)
            echo "Hello {$username}"; //scrivi questo
        }
    }


?>