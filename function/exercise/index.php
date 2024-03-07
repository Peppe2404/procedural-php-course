<?php
// creaiamo una funzione che calcola l'ipotenusa di un triangolo a partire dai suoi cateti
    function hypotenuse(int $a, int $b){ //con "int" forziamo asd usare solo gli interi per a e b soo gli argomenti ovvero i cateti
        $c = sqrt($a ** 2 + $b ** 2); // c è l'ipotenusa con la formula 
        $c = round($c, 1); //arrotonda alla prima cifra decimale

        return $c; //se invocata la funzione restituisci c

    }
//plotta il valore di return (ipotenusa) quando a e b (cateti) sono 3 e 4
    echo hypotenuse(3, 6) . " cm"; 

?>
