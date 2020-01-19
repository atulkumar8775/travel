<?php


	$name = $_POST['username'];
	$mobile = $_POST['mobile'];
	$gmail = $_POST['gmail'];
	$paswd = $_POST['password'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];



	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="college";

	//######## Create connection #########
	$conn = new mysqli($servername, $username, $password,$dbname);

	//.... Check connection....
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";


	//###### inseting data into table #######
			
	
	$sql = "INSERT INTO student (username, mobile, gmail,password,dob,gender)
	VALUES ('$name','$mobile','$gmail','$paswd','$dob','$gender')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		header('location:login.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//######## closing connection ########
	
	$conn->close();


?>