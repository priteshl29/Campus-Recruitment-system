<?php
// Creating an asssociative array of mixed type
$arr["abc"]=95;
$arr[9]="hello";
$arr[2.5]=100;
$arr["ab"]="pqr";
// LOOPING USING FOREACH

foreach ($arr as $key=>$val){
    echo $key."==>".$val."<br>";
}



