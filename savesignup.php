<?php
	include 'connect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql = "INSERT INTO `user`( `name`, `email`, `password`) 
	VALUES ('$name','$email','$password')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>