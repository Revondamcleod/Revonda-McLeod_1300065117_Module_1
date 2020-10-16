<?php
$title ="String Manupilation";
include "includes/header.php";
?>
    <br/>
    <?php
        echo '<h1>String Manupilation</h1>';
        //echo "String Manupilation!!!!";
    ?>

    <?php
        //declaring variables
        $name = "Revonda McLeod";

        //echo variable 
        //echo $name;
        echo '<h1>My name is:'.$name.'</h1>';
        
     
        $phrase1 = "Student who came late";
        
        $phrase2 = "and student who came on-time";

        echo $phrase1 .  ", named Revonda, ". $phrase2;
       // echo $phrase2;
        echo '<br/>';
        echo '<hr/>';

       //String transformation
       echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
       
       echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';

       echo 'Uppercase case: ' . strtoupper($name). '<br/>';

       echo 'Lower case: ' . strtolower($name). '<br/>';
       echo '<hr/>';
       echo 'Repeat String: ' . str_repeat('a',10). '<br/>';
       echo 'Repeat String: ' . strtoupper(str_repeat('a',10)). '<br/>';
      
       echo 'Get a substring: ' . substr($name, 2,10). '<br/>';
        //Return NULL
       echo 'Get a position of string: ' . strpos($name, 'v'). '<br/>';
       
       echo 'Find Character "R": ' . strchr($name, 'R'). '<br/>';
       echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
       echo 'Find Character "v": ' . strchr($name, 'v'). '<br/>';
       echo 'Find Character "d": ' . strchr($name, 'd'). '<br/>';
    
       //Returns how long the string is 
       echo 'Find Length of String: ' . strlen($name). '<br/>';

       echo 'Without Trim: ' . "A" . "B C D" . "E" . '<br/>';
       echo 'Trim spaces on both sides: ' . "A" .trim("B C D") . "E" . '<br/>';
       echo 'Trim spaces to the left: ' . "A" . ltrim ("B C D") . "E" . '<br/>';
       echo 'Trim spaces to the right: ' . "A" . rtrim ("B C D") . "E" . '<br/>';
       echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2 ) . '<br/>';
    ?>
    
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;