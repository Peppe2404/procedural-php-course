<?php 
    //hashing = transforming sensitive data into other characters via an algorythm

    $password = "pizza123"; //creiamo una password
    
    //creiamo la variabile $hash che conterrà la $password processata dall hashing
    $hash = password_hash($password, PASSWORD_DEFAULT); //il secondo argomento è il tipo di algoritmo
    
    //echo $hash;

    //creiamo una verifica della password inserita
    if(password_verify("pizza123", $hash)){ //il primo argomento è la password da verificare
                                            //il secondo è la password creata in precedenza
        echo"You are logged in!";
    }
    else{
        echo"incorrect password";
    }
?>