<?php
$title ="Do-While / While Loops";
include "includes/header.php";
?>
    <h1>Do-While / While Loops</h1>
    <?php
        $grade = 0;
        //Infinite Loop
        //while($grade < 10){
          //  echo '<p> I am less than Ten (10)</p>';
       // }
    
        //Pre-Condition Loop
        while($grade < 10){
           echo '<p> I am less than Ten (10)</p>';
           $grade++;
        }

        echo'EXIT LOOP';
    ?>

    <h1>Do-While Loop</h1>
        <?php
            //Post-Condition Loop
            $grade = 0;
            do{
                echo '<p> I am do-while loop</p>'; 
                $grade++;
            }while($grade < 10);
        
        ?>
        
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;




















































































</body>
</html>