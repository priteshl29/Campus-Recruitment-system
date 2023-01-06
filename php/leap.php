<html>
<body>
    <?php
   
    function leapyear($d)
    {
        if($d % 400 == 0){ 
        echo("It is a leap year");}
        else if ($d % 100 == 0){ 
        echo("It is not a leap year");}
        else if ($d % 4 == 0){ 
        echo("It is a leap year");} 
        else{ 
        echo("It is not a leap year");}
    }
    $d=2014;
    leapyear($);
    ?>
    </body>
</html>