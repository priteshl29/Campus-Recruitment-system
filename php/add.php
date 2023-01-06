<html>
<body>
<?php
function add(...$numbers)
{
    $sum=0;
    foreach($numbers as $n)
    {
        $sum+=$n;
    }
    return $sum;
}
echo add(1,2,3,4);
echo"<br>";
echo add(4,3,5,65,66);
?>