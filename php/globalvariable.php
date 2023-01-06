<html>
    <body>
        <?php
        $x=100;
        $y=200;
        function add()
        {
            global $x,$y;
            $sum=$x+$y;
            echo"<br> sum of given no=".$sum;
        }
        function sub()
        {
            global $x,$y;
            $sub=$x-$y;
            echo"<br> substraction =".$sub;
        }
        add();
        
        sub();
        ?>
        </body>
    </html>