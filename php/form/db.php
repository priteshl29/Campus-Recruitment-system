<?php
    $dbhost='localhost:3307';
    $dbuser='root';
    $dbpass='';
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);

    if(!$conn)
    {
        die('could not connect '.mysql_error());
    }
    echo 'connected successfully';
    mysqli_close($conn);
    ?>