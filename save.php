<?php
	include 'connect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];
	$sql = "INSERT INTO `contact`( `name`, `email`, `country`,`subject`) 
	VALUES ('$name','$email','$country','$subject')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>