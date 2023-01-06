<?php
	$Name = $_POST['Name'];	
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Address = $_POST['Address'];
	$suggestion = $_POST['suggestion'];
	$session = $_POST['session'];	
	// Database connection	
	$conn = new mysqli('localhost','root','','tform');	
		if($conn->connect_error){	
				echo "$conn->connect_error";		
				die("Connection Failed : ". $conn->connect_error);
				} else 
				{		
					$stmt = $conn->prepare("insert into tform(Name, Email, Mobile,Address, session,suggestion) values(?, ?, ?, ?, ?, ?)");	
					$stmt->bind_param("ssisss", $Name, $Email, $Mobile, $Address, $session, $suggestion);		
					$execval = $stmt->execute();		
					// echo $execval;		
					echo "Submitted Succesfully...";		
					$stmt->close();
					$conn->close();
								
				}
					
?>