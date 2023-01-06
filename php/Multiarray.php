<?php
//multidimensional array
$contacts=array(
    array(
        "name"=>"Peter Parker",
        "email"=>"peterparker@gmail.com",
    ),
    array(
        "name"=>"rowan atkinson",
        "email"=>"rowan@gmail.com",
    ),
    array(
        "name"=>"Harry Potter",
        "email"=>"Harry123@gmail.com",
    )

);
echo "peter Parker's Email-id is : ".$contacts[0]['email'];
echo "<br>rowans Email-id is : ".$contacts[1]['email'];
echo "<br>harry Potters Email-id is : ".$contacts[2]['email']." <br>";


// <!-- using print_r() -->
$cities =array("London","pune","Melbourne","Mumbai");
print_r($cities);
echo "<br>";
var_dump($cities);
echo "<br>--------------------------------------------------------------------<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// Sorting arrays

$friends =array("prasad","mugdha","treasa","gaya","dixi");
sort($friends);
print_r($friends);
echo "<br>";

rsort($friends);
print_r($friends); 


?>