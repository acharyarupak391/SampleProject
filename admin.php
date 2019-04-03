<?php
$Email = $_GET['Email'];
$Subject = $_GET['Subject'];

$con=mysqli_connect('localhost','root','','got');

		if($con){
			echo 'successful connection';
		}
		else{
			die('Error');
			}
$sql="INSERT INTO feedback (email,comment) VALUES ('$Email','$Subject')";

if($con->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error " , $sql , "<br>" . $con->error;
	}

?>
