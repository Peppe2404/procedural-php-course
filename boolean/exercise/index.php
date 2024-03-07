<?php
    $hours = 41;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        echo "you will receive a lollipop this week homie";
    }
    
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5)); //extra pay, after 40 hours, in US is almost 50% increased
    }

    echo "you made \${$weekly_pay} this week";

?>