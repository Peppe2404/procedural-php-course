<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="Visa">
    Visa<br>
    <input type="radio" name="credit_card" value="Mastercard">
    Mastercard<br>
    <input type="radio" name="credit_card" value="American Express">
    American Express<br>
    <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php

    
    if(isset($_POST["confirm"])){ //se viene premuto confirm

        $credit_card = null; //impostato di default per evitare che compaiano errori quando non si seleziona nulla a causa dell else
        
        if(isset($_POST["credit_card"])){ //se viene selezionata una credit_card
            $credit_card = $_POST["credit_card"]; //assegna alla variabile $credit_card il valore scelto dall utente per crdit_card (visa, mastercard o american express)
        } /*
        if($credit_card == "Visa"){
            echo "you selected Visa";
        }
        elseif($credit_card == "Mastercard"){
            echo "you selected Mastercard";
        }
        elseif($credit_card == "American Express"){
            echo "you selected American Express";
        }

        else{ //altrimenti se viene selezionaro confirm senza scegliere la credit_card
            echo "pls make a selection"; //plotta questo messaggio
        } */
        
    //facciamo la stessa cosa usando uno switch

       switch($credit_card){
        case "Visa":
            echo "you selected Visa";
            break;
        case "Mastercard":
            echo "you selected Mastercard";
            break;
        case "American Express":
            echo "you selected American Express";
            break;
        default:
        echo "please make a selection";
       }
    } 


    

?>