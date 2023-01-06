<!-- //validating integer// -->
<?php
$int =100.04;
if(!Filter_var($int,FILTER_VALIDATE_INT)== false)
{
    echo ("Integer is valid");
}else{
    echo ("Integer is not valid");
}
?>