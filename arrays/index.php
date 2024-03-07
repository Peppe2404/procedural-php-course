<?php

    //arrays are variables that can hold multiple value at same time

    $foods = array("apple", "orange", "banana", "coconut");

    echo $foods[0] . "<br>"; //insert the array name and the position. Zero is the first position
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br><br><br>";
    
    
  //interazioni con l'array  
    $foods[0] = "pineapple"; //cambiare il nome usando la posizione nell array, in questo caso abbiamo cambiato la prima posizione (zero) in pineapple.
    array_push($foods, "<br><br>grapefruit", "balckberry"); //array_push(array, "nuova variabile") aggiunge una o più variabili alla fine di un array
    array_pop($foods); //rimuove l'ultima variabile
    array_shift($foods); //rimuove la prima var
    $reversed_foods = array_reverse($foods);//inverte l'array ma solo su una nuova array (quindi va cambiato anche il foreach inserende la nuova array ovvero reversed_array)
    echo "there are ";
    echo count($foods);
    echo " elements in the array ";
    echo " <br> and <br>";
    echo count($reversed_foods);
    echo " elements in the reversed_array";

    //oppure per mostrare tutti in un solo comando usare foreach

    foreach($reversed_foods as $frut){ // frut è un nome generico che possiamo scegliere per la singola variabile
        echo $frut . "<br>";
    }
    

?>