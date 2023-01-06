<?php

	$Name = $_POST['Name'];	
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Pickupp = $_POST['Pickupp'];
	$Pickupday = $_POST['Pickupday'];
	$timerange = $_POST['timerange'];
    $type = $_POST['type'];	
    $information = $_POST['information'];
	// Database connection	
	$conn = new mysqli('localhost','root','','Cform');	
		if($conn->connect_error){	
				echo "$conn->connect_error";		
				die("Connection Failed : ". $conn->connect_error);
				} else 
				{	
					$stmt = $conn->prepare("insert into Cform(Name, Email, Mobile,Pickupp,Pickupday,timerange,type,information) values(?, ?, ?, ?, ?, ?,?,?)");	
					$stmt->bind_param("ssisssss", $Name, $Email, $Mobile, $Pickupp, $Pickupday, $timerange,$type,$information);		
					$execval = $stmt->execute();		
					echo $execval;		
					echo "Submitted Succesfully...";		
					$stmt->close();
					$conn->close();
								
				}

					
?>