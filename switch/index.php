<?php

//instead of using many elseif we can use switches

/*$grade = "F";

switch($grade){
  //create cases for each scenario
    case "A":
        echo"You did great";  
        break;
    case "B":
        echo"You did good";  
        break;
    case "C":
        echo"You did ok";  
        break;
    case "D":
        echo"You must study";  
        break;
    case "E":
        echo"You did not good";  
        break;
    case "F":
        echo"You suck";  
        break;   
    default:
        echo"{$grade} is not a valid value";  
}*/

$date = date("l");

$date = "Friday";

switch($date){
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "I hate Tuesday";
        break;
    case "Wednesday":
        echo "I hate Wednesday";
        break;
    case "Thursday":
        echo "I hate Thursday";
        break; 
    case "Friday":
        echo "It's almost done";
        break;
    case "Saturday":
        echo "I love Shabbat";
        break;
    case "Sunday":
        echo "I hate Sunday";
        break; 
    default:
        echo"{$date} is not a valid day";
}


?>