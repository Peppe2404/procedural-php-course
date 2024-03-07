<!-- cookie = information stored in the user's browser about 
browsing preferences, targeted advertisement and other non-sensitive date_add -->

<?php 
    //usiamo la funzione setcookie() che conserverà i cookie in un associative array
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/" ); // scade dopo 2 giorni (86400 secondi * 2)
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/" ); 
    setcookie("fav_dessert", "ice cream", time() -0, "/" ); // time() -0, cancella i cookie 

    /*
    foreach($_COOKIE as $key => $value){ //mostriamo tutte le chiavi e i valori degli arrays precedenti
        echo"{$key} = {$value} <br>";
    }
    */

    if(isset($_COOKIE["fav_food"])){ //se una delle chiavi fav_food ha un valore
        echo"Buy some {$_COOKIE["fav_food"]} !!!"; //stampa questo
    }
    else{ //altrimenti stampa quest altro
        echo"I don't know your favourite food";
    }
?>