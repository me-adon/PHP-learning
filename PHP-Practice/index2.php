<?php
    $var = 10;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>



<body>
    <div class="main">     
        <div class="header">
            <h1> Header </h1>
        </div>



        <div class="cont">
            <?php
            
            $a = 10;
            $b = 10;

            var_dump($a == $b);

            echo "<br>";

            $a = 10;
            $b = "10";

            var_dump($a == $b);

            echo "<br>";

            $a = 10;
            $b = "10";

            var_dump($a === $b);

            echo "<hr>";

            $a = 10;
            $b = "10";

            var_dump($a != $b);

            echo "<br>";

            $a = 10;
            $b = "10";

            var_dump($a !== $b);

            echo "<hr>";


            $a = "Welcome to ";
            $b = "IUT SWE";

            $c = $a . $b;
            echo $c;

            echo "<br>";

            $a = "Welcome to ";
            $b = "IUT SWE-20";

            $a .= $b;
            echo $a;

            echo "<hr>";
            
            ?> 
            
        

        </div>



        <div class="footer">
            <h1> Footer </h1>
        </div>

    </div>


</body>



</html>