<?php
$title ="Function";
include "includes/header.php";
?>
    <br/>
    <?php
        echo '<h1>Simple PHP Function</h1>';
        //echo "Hi Revonda!!!!";
    ?>

    <?php
        //declaring variables
        $name = "Revonda McLeod";

        //echo variable 
        //echo $name;
        echo '<h1>My name is:'.$name.'</h1>';
        
        /*Definig a function */
        function writemessage(){
            echo "You are a really nice person, have a great day!";
        }
        // Calling function 
        writemessage();
        echo "<hr/>";
        writemessage();
        
        //Function with parameters

        function addfunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        function changeNum(&$num){
            $num = $num + 10;
            //$num+= 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        addfunction(10,20);
        addfunction(10, $num);
        echo $num;
        addfunction(10, "50");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';

    ?>
    
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;