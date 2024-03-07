<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script> //aggiungo una funzione javascript che limita il  numero di selezioni a 3
        function limitCheckbox(max) {
            var checkboxGroup = document.querySelectorAll('input[type="checkbox"][name="foods[]"]');
            var checkedCount = 0;
            checkboxGroup.forEach(function(checkbox) {
                if(checkbox.checked) checkedCount++;
            });
            if(checkedCount >= max) {
                checkboxGroup.forEach(function(checkbox) {
                    if(!checkbox.checked) checkbox.disabled = true;
                });
            } else {
                checkboxGroup.forEach(function(checkbox) {
                    checkbox.disabled = false;
                });
            }
        }
    </script>
</head>
<body>
    <form action="index.php" method="post">    <!-- aggiungo ad ogni checkbox il controllo javascript che limita le selezioni a 3 -->
        <input type="checkbox" name="foods[]" value="Pizza" onclick="limitCheckbox(3)"> <!-- ora invece creo un array dando una categoria univoca a tutti "foods[]" --> 
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger" onclick="limitCheckbox(3)">  
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="HotDog" onclick="limitCheckbox(3)">  
        HotDog<br>
        <input type="checkbox" name="foods[]" value="Taco" onclick="limitCheckbox(3)">  
        Taco<br>
        <input type="submit" name="submit" value="submit" onclick="limitCheckbox(3)">
    </form> 
</body>
</html>

<?php

    if(isset($_POST["submit"]) && !empty($_POST["foods"])) { //quando viene premuto submit e i checkbox NON sono vuoti
    
        $foods = $_POST["foods"]; //ricava il checkbox selezionato


    foreach($foods as $food){ //e per ogni checkbox selezionato
        echo $food . "<br>"; //plotta i checkbox selezionati
    }}

    else{ //altrimenti
        echo "please select a food <br>"; //plotta messaggio
    }

?>