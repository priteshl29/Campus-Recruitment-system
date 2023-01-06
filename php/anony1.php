<?php
$arr=[10,3,70,21,54];
usort($arr,function($x,$y)
{
    return $x>$y;
    // return $x<$y;
});
foreach($arr as $x){
    echo $x."\n";

}

echo "<br>Anonymous funciton as an argument in usort function<br>";
$arr=[10,3,4,6,2,77];
usort($arr,function ($x,$y)
{
    return $x>$y;
});

foreach ($arr as $x){
    echo $x."<br>";
}
?>
