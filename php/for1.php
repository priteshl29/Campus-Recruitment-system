<html>
    <body>
        <?php
        echo "<table border=2>";
        for($i=1;$i<11;$i++)
        {
            echo "<tr>";
        for($n=1;$n<30;$n++)
        {
             echo "<td>".$n."*".$i."=".($n*$i)."</td>";
        }
        echo "</tr>";
    }
       ?>
        </body>
        </html>