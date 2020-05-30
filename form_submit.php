<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"insert into  user(fullname,email,password) value('$fullname','$email','$password')");


  if ($query) {
	  $response = array(
		'status' => 'success',
		'data' =>'OK'
	);
	$_SESSION["userid"] = $email;
	echo json_encode($response);
  }
  else
    {
      $response = array(
			'status' => 'error',
			'data' =>'Error'
		);
		echo json_encode($response);
    }

  


  ?>