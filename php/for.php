
<html>
<body>
<?php
    echo "<table border=2>";
    for($n=1;$n<11;$n++)
    {
        echo "<tr>";
        for($x=1;$x=30;$x++)
        {   
            echo "<td>".$x."*".$n."= " .($x*$n)."</td>";
        }
        echo "</tr>";
        
    }
?>
</body>
</html>
