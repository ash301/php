
<?php
	
	$con = mysqli_connect('mysql.hostinger.in','u413891378_user','root@123');

	if(!$con)
	{
		echo "Not connected to server" ;  
	}	

	if(!mysqli_select_db($con,'u413891378_db'))

	{
		echo "database not selected";
	}

	$Name = $_POST['username'];
	$Email = $_POST['email'];

	$sql = "INSERT INTO person(Name , Email) VALUES ('$Name','$Email')";

	if(!mysqli_query($con,$sql))
	{
		echo "Not inserted ";
	} 
	else
	{
		echo "Inserted successfully ";
	}

	header("refresh:2 ; url = index.html");


?>