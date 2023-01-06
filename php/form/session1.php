<?php
//start session 
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        $_SESSION["user"]="Pritesh";
        echo "Session information are set succesfully. <br>/";
        ?>
        <a href="session3.php">Click here to visit next page</a>
        
    </body>
</html>










