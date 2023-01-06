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
    //   $sql ="CREATE TABLE Myguests(id Int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50))";
            $sql="INSERT INTO TABLE Myguests(firstname,lastname,email) 
            values(10,'pritesh','lingraj','mail@')";
            $sql="INSERT INTO TABLE Myguests(firstname,lastname,email) 
            values(11,'pritresh','lingrarj','maaaail@')";
            $retval= mysqli_query($conn,$sql);
            if($conn->multi_query($sql)===TRUE)
            {     
                echo "New records inserted successfully";

            }
            ?>