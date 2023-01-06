<html>
    <head><title>$_request </title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    Name: <br><input type="text" name="fname"><br>
            <input type="submit" value="Submit">
</form>
<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST")
{
    
    $name = $_REQUEST ['fname'];

    if (empty ($name))
    {echo "Name is empty";
    }
    else {
    echo $name;}
}
?>  
</body>
</html>