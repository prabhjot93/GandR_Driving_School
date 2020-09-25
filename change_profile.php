<?php

session_start();

error_reporting(0);

include('includes/dbconnection.php');



$user_email = $_SESSION['userid'];

$fullname = $_POST['user_name'];



$sql = "UPDATE user SET fullname='".$fullname."' WHERE email='".$user_email."'";

if ($con->query($sql) === TRUE) {

		   $response = array(

	  		'status' => 'success',

	  		'data' =>'OK'

	  	);

		unset($_SESSION['user_fullname']);

		$_SESSION['user_fullname'] = $fullname;

	  	echo json_encode($response);

} else {

	   $response = array(

  		'status' => 'error',

  		'data' =>'password not updated'

  	);

  	echo json_encode($response);

}



?>
