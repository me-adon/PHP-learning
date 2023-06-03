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
                echo "we learn" . " echo vsdaf";

                echo "<br>";

                print "we learn print";

                echo "<br>";

                echo "variable is" . " " . $var;

                echo "<hr>";
            ?>


            1. Integer 
            2. Float 
            3. String 
            4. Boolean
            5. Array
            6. Object
            7. NULL
            8. Resource
            <hr>


            5. Array
            <hr>
        


            <?php
            $a = array("php", "c", "c++");
            var_dump($a);
            ?>


            <hr>


            <?php
            class student{
                    function dept(){
                        return "SOFTWARE ENGINEER";
                    }

                    function print_bro(){
                        echo $this -> dept();
                    }
                }

                $st = new student;
                $st->print_bro();

            ?>

        </div>

        <div class="footer">
            <h1> Footer </h1>
        </div>

    </div>


</body>



</html>