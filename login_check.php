<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."'" ;
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) == 1) {
   $response = array(
		'status' => 'success',
		'data' =>'OK'
	);
	$_SESSION["userid"] = $email;
	echo json_encode($response);
} else {
	$response = array(
		'status' => 'error',
		'data' =>'error'
	);
	echo json_encode($response);

}

 ?>