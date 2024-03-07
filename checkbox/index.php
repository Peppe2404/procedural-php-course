<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza"> <!-- per un input di tipo checkbox, il name è la key e la value è la value --> 
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">  
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="HotDog">  
        HotDog<br>
        <input type="checkbox" name="taco" value="Taco">  
        Taco<br>
        <input type="submit" name="submit" value="submit">
    </form> 
</body>
</html>

<?php
    if(isset($_POST["submit"])){ //quando viene premuto submit
       
        if(isset($_POST["pizza"])){ //e viene scelto pizza
            echo "you choose Pizza <br>"; //plotta questo
        }
        if(isset($_POST["hamburger"])){ 
            echo "you choose hamburger <br>"; 
        }
        if(isset($_POST["hotdog"])){ 
            echo "you choose hotdog <br>"; 
        }
        if(isset($_POST["taco"])){ 
            echo "you choose tacos <br>"; 
        }

        if(empty($_POST["pizza"])){ //e viene scelto pizza
            echo "don't like pizza? <br>"; //plotta questo
        }
        if(empty($_POST["hamburger"])){ 
            echo "don't like hamburger? <br>"; 
        }
        if(empty($_POST["hotdog"])){ 
            echo "don't like hotdog? <br>"; 
        }
        if(empty($_POST["taco"])){ 
            echo "don't like pizza taco? <br>"; 
        }
    }

?>