<html>
<body>
    <?php
    function reverse($f)
    {
        $length=strlen($f);
        for($i=($length-1);$i>=0;$i--)
        {
            echo $f[$i];
        }
    }
    $f="hello";
    reverse($f);
    ?>
    </body>
</html>