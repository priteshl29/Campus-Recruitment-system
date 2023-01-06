<?php
	$Name = $_POST['Name'];	
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Address = $_POST['Address'];
	$Location = $_POST['Location'];
	$Size = $_POST['Size'];	
	// Database connection	
	$conn = new mysqli('localhost','root','','order1');	
		if($conn->connect_error){	
				echo "$conn->connect_error";		
				die("Connection Failed : ". $conn->connect_error);
				} else 
				{		
					$stmt = $conn->prepare("insert into order1(Name, Email, Mobile,Address, Location,Size) values(?, ?, ?, ?, ?, ?)");	
					$stmt->bind_param("ssisss", $Name, $Email, $Mobile, $Address, $Location, $Size);		
				    $execval = $stmt->execute();		
				     echo $execval;		
					echo "Submitted Succesfully...";		
					$stmt->close();
					$conn->close();
								
				}
					
?>