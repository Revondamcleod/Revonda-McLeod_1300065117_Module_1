<?php
$title ="index";
include "includes/header.php";
?>
    <br/>
    
    <?php
        echo '<h1>PHP Primer</h1>';
        //echo "Hi Revonda!!!!";
    ?>

    <?php
        //declaring variables
        $name = "Revonda McLeod";

        //echo variable 
        echo $name;
        echo '<h1>My name is ' .$name.'</h1>';
 
    ?>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<br/>
<br/>
<br/>
<br/>
<br/>
<?php require "includes/footer.php"?>;

