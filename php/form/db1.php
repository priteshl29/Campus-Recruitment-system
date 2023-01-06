<?php
$servername="localhost:3307";
$username="root";
$password="";

// /creating a connection_aborted
$conn =new mysqli($servername,$username,$password);

//check connection 

if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
$sql ="CREATE DATABASE Pritesh";
if($conn->query($sql)===TRUE)
{
    echo "Database created successfully with the name manu";
    CREATE TABLE 
}
else{
    echo "Error creating database ".$conn->error;
}
//closing conection 
$conn->close();

?>