<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $enquiry=$_POST['enquiry'];
 

    $query=mysqli_query($con,"insert into  tblenquiry(FullName,Email,MobileNumber,Enquiry) value('$fullname','$email','$mobilenumber','$enquiry')");
        if ($query) {
    $msg="Your enquiry has been sent successfully.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Home Page</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Driving School" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<?php include_once('includes/header.php');?>
	<div class="banner">
		<hr />

	<div class="register">
		<div class="container">
			<div class="col-md-6 w3layouts_register_right">
				<form action="#" method="post">
				<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>	
					<input name="fullname" placeholder="Full Name" type="text" required="true">
					<input name="email" placeholder="Email" type="email" required="true">
					<input name="mobilenumber" placeholder="Mobile Number" type="text" maxlength="10" required="true">
				<input name="enquiry" placeholder="Enquiry About" type="text" required="true" style="margin-top:4%">
					<input type="submit" name="submit" value="Enquiry Now">
				</form>
			</div>
			<div class="col-md-6 w3layouts_register_left">
				<h3><span>Enquiry </span> now</h3>
				<p>Enquiry now for driving classes to learn car driving with our Trained and certified instructors.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<
	<!-- //news-letter -->
	<!-- welcome -->

	
		

	<!-- footer -->
	<?php include_once('includes/footer.php');?>
	<!-- //footer -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>