<?php
    $age = 79;

    if ($age >= 80){
        echo "you are too old for this staff";
    }
    elseif ($age >= 18){
       echo "you may enter this site";
    }
    elseif ($age <= 0){
        echo "That wasn't a valid age";
    }
    else {
        echo "you must be 18+ to enter";
    }