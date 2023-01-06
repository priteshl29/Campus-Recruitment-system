<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $conn = new mysqli('localhost:3307','root','password','loginlibrary');

    if($conn->connect_error){
        die('connection failed:'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users1(name,email,password1,password2) values (?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$password1,$password2);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<html>
                <head>
                    <link rel='stylesheet' href='database.css'>
                </head>
                <body>
                    <div class='div1'>
                        <button class='button1'>
                            <strong>Reader added succesfully!!!</strong>
                        </button>
                    </div>
                </body>
            </html>"; 
    }