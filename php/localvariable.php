<html>
    <body>
        <?php
        function add()
        {
            $x=100;
            $y=200;
            $sum=$x+$y;
            echo"<br> sum of given no=".$sum;
        }
        function sub()
        {
            $x=500;
            $y=200;
            $sub=$x-$y;
            echo"<br> substraction =".$sub;
        }
        add();
        echo "$x";
        sub();
        ?>