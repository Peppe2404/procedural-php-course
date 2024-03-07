<?php

//un associative array semplicemente associa (pairs) tramite il simbolo => (arrow) un valore (key) ad un altro (value)

    $capitals = array("USA"=>"Washington DC", 
                      "Japan"=>"Tokyo", 
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");

    //cambiare un valore in un array associativa indicando la chiave da cambiare anzichè la posizione 
    $capitals["USA"] = "Las Vegaz";
    //aggiungiamo una nuova chiave 
    $capitals["China"] = "Beijing";
    //rimuovere l'ultima chiave
    array_pop($capitals); 
    //rimuovere il primo
    array_shift($capitals);
    //mostra tutte le chiave dell'array $capitals in una nuova array $keys
    $keys = array_keys($capitals);
    //inverti (flip) le chiavi con i valori
    $flipped = array_flip($capitals);
    //reverse
    $reversed = array_reverse($capitals);
    //conta il numero di chiavi nell array
    echo "il numero di chiavi nell'array è: ";
    echo count($capitals);
    echo "<br><br>";

    //echo $capitals["India"]; //plotta la capitale dell'India

    /*foreach($capitals as $key => $value){ //for every key and values present in capitals
        echo "{$value} {$key} <br>"; //plot all the value and key
    }*/

    /*foreach($keys as $key){ //per ogni $key presente in $keys
        echo "{$key} <br>"; //plotta tutte le singole $key
    }*/

    /*foreach($flipped as $key => $value){ //per tutte le chiavi e i valori presenti nell array flipped
        echo "{$key} = {$value} <br>"; //plotta chiavi e valori
    }*/

    foreach($reversed as $key => $value){ //per ogni chiave e valore presente nell array reversed
        echo "{$key} = {$value} <br>"; //plotta chiave e valore
    }
?>