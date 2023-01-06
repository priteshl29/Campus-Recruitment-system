<!DOCTYPE html>
<html>
<body>
<?php
$t=date("H");
if($t<'20'){
    echo "have a nice day!","<br>","$t";
}
else{
    echo "go to hell!!","<br>","$t";
}
echo "<br>";
$u=date("D");
if($u!="monday"){
    echo"go away this is not monday ";
    echo "<br>";
    echo "\n this is $u";
}


?>
</body>
</html>
