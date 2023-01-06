<?php
$email= $_POST["email"];
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $emailErr="Invalid format and please re enter valid email";
    
}

?>

