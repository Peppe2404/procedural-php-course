<?php
        $username = "Peppe The Peppe";

    // str to... string to lower or upper
        //$username = strtolower($username); //trasforma la stringa in minuscolo
        //$username = strtoupper($username);
    // trim remove all the blank space before and after
        //$username = trim($username);
    // string pad aggiunge fino a x caratteri (20), il valore y (0), 
        //$username = str_pad($username, 20, "0");
    //string replace sostituisce un valore con un altro in una variabile
        $phone = "123-456-7890";
         //sostituisci i trattini ("-") con nulla ("") in $phone   
        //$phone = str_replace("-", "", $phone); 
    //string reverse inverte la stringa
        //$phone = strrev($phone);
    //string shuffle mischia i caratteri all interno di una stringa
        //$phone = str_shuffle($phone);
    //string compare, comparare due stringhe. restituisce 1 se sono uguali e -1 se diverse
        //$equals = strcmp($phone, $username);
    //string lenght conta il numero di caratteri in una stringa
        //$count = strlen($username);
    //string position trova la prima posizione di un carattere cercato partendo da 0
        //$index = strpos($username, "p");
    //sub string crea una stringa nuova parziale a partire da una stringa nota
    //in sub string il secondo argomento è la posizione inziale della nuova stringa
    //il terzo argomento è la lunghezza totale in caratteri che dovrà avere la stringa
        //$subname = substr($username, 2, 3); //parti dal terzo carattere (2) e crea una stringa di 3 caratteri (3)
    //explode trasforma in array tutti i caratteri raggruppati separati da spazi che si trovano in una stringa e li rendi valori unici di un array
        /*$fullname = explode(" ", $username);
        //creiamo un ciclo foreach per plottare tutti i valori dell'array
        foreach($fullname as $name){
            echo $name . "<br>";
        }*/
    //implode viceversa trasforma un array in una stringa
        //creaiamo il nostro array
        $username_2 = array("Peppe", "The", "Peppis");
        //implodiamo l'array in una stringa
        $username_2 = implode("-", $username_2); //primo argomento = separatore (-)
        //plottiamo la stringa
        echo $username_2;
        


?>