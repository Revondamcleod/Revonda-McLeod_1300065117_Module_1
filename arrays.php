<?php
$title ="Array";
include "includes/header.php";
?>
    <br/>
    <?php
        echo '<h1>Arrays</h1>';
        //echo "Hi Revonda!!!!";
    ?>

    <?php
        //declaring variables
        $name = "Revonda McLeod";

        //echo variable 
        echo $name;
        echo '<h1>My name is:'.$name.'</h1>';
        
        //A variable
        $num = 3;
        //An array
        //Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,102,2,65,78,4,65,68,65,100);
        //  Access value in subscript of the array using the index
        echo $numbers [7];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>The size of the array is: $size </p>";
        
        for($count = 0; $count < 19; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>

<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;