<?php
$age=array("Riya"=>"30","Ruta"=>"28","Rama"=>"33");
ksort($age);

foreach($age as $x=>$x_value)
{
    echo "key=" . $x. ",value=" . $x_value;
    echo "<br>";
}
?>  
<!-- // echo "REverse sorting by key <br>"; -->

<?php
$age=array("Riya"=>"30","Ruta"=>"28","Rama"=>"33");
krsort($age);

foreach($age as $x=>$x_value)
{
    echo "key=" . $x. ",value=" . $x_value;
    echo "<br>";
}
 

$d=strtotime("10.30pm April 15 2014");
echo "Created date is ". date("y-m-d h:i:sa",$d);
echo "<br>";
echo "<br>";
$s=mktime(9,10,32,8,7,2019);
$s=strtotime("tomorrow");
echo "Created date is ".date("y-m-d h:i:sa",$s)."<br>";
echo "<br>";
echo "<br>";
echo date("y-m-d h:i:sa",$s)."<br>";
?>