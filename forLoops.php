<?php
$title ="For Loops";
include "includes/header.php";
?>
    <br/>
    <?php
        echo '<h1>For Loops</h1>';
        //echo "For-Loop!!!!";
    ?>

    <?php
        //declaring variables
        $name = "Revonda McLeod";

        //echo variable 
       // echo $name;
        echo '<h1>My name is:'.$name.'</h1>';
        

        //For-Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD!</p>';
        }
        
        echo '<p> Loop less than 10 </p>';
        for($count = 0; $count < 10; $count++){
            echo "<p>The count is : $count</p>";
            
        }
    ?>
    
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;