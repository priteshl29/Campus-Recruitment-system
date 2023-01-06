<?php declare(strict_types=1);
function addNumbers1(float $a,float $b) : int 
{
    return (int) ($a + $b);
}
echo addNumbers1(32.4,8.8);

function defpara($str,$num=12)
{
    echo "<br> $str is $num years old \n";
}
defpara("ronak",15);
defpara("rohan");
?>

<!-- 
// function addNumbers(int $a,int $b) 
// {
//     return $a+$b;
// }
// echo addNumbers(5,"5 days");-->
 
