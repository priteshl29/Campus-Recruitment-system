<!-- user defined functions -->

<?php
function student($name)
{
    echo "$name from  FYMCA,<br>";
}
student("Avanti");
student("Pritisha");
student("Munu");
student("Aarvi");



// <!-- recursive function -->
function display($number){
    if($number<=5){
        echo"$number<br/>";
        display($number+1);
    }
}
display(1);

?>
