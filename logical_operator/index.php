<?php
    $temp = -25;

    // && is a second condition to meet 
    // || one of the condition must meet
    // ! reverse the logic (not)

    //if($temp >= 0 && $temp <= 30){echo"the weather is good";}
    //else{echo"the weather sucks";}

    //if($temp < 0 || $temp >= 30){echo"the weather sucks";}
    //else{echo"the weather is fine";}

    $cloudy = false;

    if($temp < 0 || $temp >= 30){echo"the weather sucks";}
    else{echo"the weather is fine";}
    if($cloudy){echo" and it's cloudy";}
    else{echo" and it's sunny";}

    /*to reverse a logical operator use !
     ex: if($cloudy) it means "if $cloudy is true"
         if(!$cloudy) it means "if $cloudy is NOT true"*/


?>