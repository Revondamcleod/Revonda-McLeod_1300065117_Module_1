<?php
$title ="Date and Time Manupilation";
include "includes/header.php";
?>
    <br/>
    <?php
        echo '<h1>Simple PHP Date and Time Manupilation</h1>';
        //echo "Hi Revonda!!!!";
    ?>

    <?php
        //declaring variables
        $name = "Revonda McLeod";

        //echo variable 
        //echo $name;
        echo '<h1>My name is:'.$name.'</h1>';
        
       
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow ['mon']. '<br/>';
        echo $datenow ['year']. '<br/>';

        echo "Today's Date: " . $datenow ['mon'] .'-' . $datenow['mday'] . '-' . $datenow['year']. '<br/>';

        echo time() .'<br/>';

        print date("m-d-y G.i:s<br>", time()). '<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time()). '<br/>';


    ?>
    
<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;