<?php
    $dbhost ='localhost:3307';
    $dbuser = 'root';
    $dbpass='';
    $dbname='Pritesh';
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(! $conn)
    {
        die('could'.mysqli_error());

    }
    echo 'Connected Succesful';
    $sql ="CREATE TABLE Myguests(id Int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50))";

            $retval= mysqli_query($conn,$sql);
            if(! $retval)
            {
                die('could not create table :'.mysqli_error($conn) );
            }
            echo "Table employee created successfully <break>";
            mysqli_close($conn);
            ?>