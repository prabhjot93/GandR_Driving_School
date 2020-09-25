<?php 

session_start();

error_reporting(0);

include('includes/dbconnection.php');

$forget_email = $_POST['forget_email'];

$search = mysqli_query($con, "SELECT * FROM user WHERE user_email='".$forget_email."'");

    if (!$search)
    {
        die('Error: ' . mysqli_error($con));
    }

    if(mysqli_num_rows($search) == 0){

          $response = array(

          'status' => 'no_email_found',

          'data' =>'No account found',
          'email' =>$forget_email

        );
      echo json_encode($response);

    }else{
    	$randompassword = rand(1234, 9999);
    	// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		//set subject and message
		$subject = 'Password Change';
		$message = 'Your new password is '.'<b>'.$randompassword.'</b><br> Please change it as soon as possible.';
		

		if(mail($forget_email,$subject,$message,$headers)){
			$sql = "UPDATE user SET user_password='".md5($randompassword)."' WHERE user_email='".$forget_email."'";
			if ($con->query($sql) === TRUE) {
					   $response = array(
				  		'status' => 'success',
				  		'data' =>'OK'
				  	);
				  	  echo json_encode($response);
				} else {
					   $response = array(
				  		'status' => 'error',
				  		'data' =>'password updated'
				  	);
				  	  echo json_encode($response);
				}
			}else{
				$response = array(
				  		'status' => 'mail not sent',
				  		'data' =>'mail no sent'
				  	);
				  	  echo json_encode($response);
			}

    	
    }


?>