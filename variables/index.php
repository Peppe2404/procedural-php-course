<?php

// variables - are named containers storing reusable data
    
    // strings data - a series of texts
    $name = "Bro Code";
    $food = "pizza";
    $email = "fake@gmail.com";

    // ints datas - integer numbers
    $age = 21;
    $users = 2;
    $quantity = 4;

    // floats datas - a number with a decimal point or a number in exponential form
    $gpa = 2.5;
    $price = 5.99;
    $tax_rate = 5.1;

    // bools datas - boolean value can be true or false
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo"You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is \${$total}<br>";
    echo"Please confirm that your email is {$email}<br>";

?>