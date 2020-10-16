<?php
$title ="If Statement";
include "includes/header.php";
?>
    <br/>
    <h3 style="color: red"></h3>
    <?php
        echo '<h1>If Statement</h1>';
        //echo "Hi Revonda!!!!";
    ?>
    
    <?php
        //declaring variables
        $name = "Revonda McLeod";
        
        //echo variable 
        //echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        
        $grade = 90;

        if ($grade >= 50){
            echo '<h3 styles="color: green"> YOU PASSED </h3>';

        } else {

            echo '<h3 styles=" color: red"> FAILED </h3>';
        }
        
        $grade = 'A';
        //If-Else If-Else
        if($grade == 'A'){
            echo '<h2 style="color: green"> YOU ARE A SUPERSTAR!</h2>';

        } elseif ($grade == 'B'){

            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        } else {
            echo'<h2 style="color: red">YOU HAVE FAILED...</h2>';
        }

    ?>
    
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;