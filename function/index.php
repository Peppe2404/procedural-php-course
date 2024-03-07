<?php
    //a function allow you to write a code ad reuse it when you need
    //type () after function name to invoke it
    // ex. add() subtract() multiply () divide () and so on...

    //creiamo una funzione per cantare happy birthday

        function happy_birthday($first_name, $age){ //assegniamo due argomenti alla funzione
            echo "Happy Birthday dear {$first_name}! <br>"; //il primo argomento sarà la variabile ($first_name)
            echo "Happy Birthday to you! <br>";
            echo "Happy Birthday dear {$first_name}! <br>";
            echo "you are $age years old! <br> <br> "; //il secondo argomento sarà la variabile sarà $age
        }

    //invochiamo la funzione due volte
        happy_birthday("Peppe", 36); //alla prima posizione corrisponde la prima variabile creata ($first_name)
        happy_birthday("Manu", 29); //alla seconda posizione corrisponde la seconda variabile creta ($age)
?>