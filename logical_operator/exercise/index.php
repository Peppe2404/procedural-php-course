<?php
    //$age = 101;
    //$citizen = false;

    /*if($age < 18 || !$citizen){
        echo"You cannot vote BB";
    }
    else{echo "ok you can vote";}*/

    $child = false;
    $senior = true;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"the ticket price is \${$ticket}"

?>