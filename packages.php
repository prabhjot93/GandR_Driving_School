<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Packages</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Driving School " />
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
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<?php include_once('includes/header.php');?>

	<div class="banner1">
	</div>


	<div class="banner-bottom">
 		<div class="container">
 			<div class="w3l-heading">
 				<h2 class="w3ls_head">Lessons </h2>
 			</div>

 			<div class="w3ls_banner_bottom_grids">
 				<div class="col-md-4 agileits_services_grid">
 					<div class="w3_agile_services_grid1">
 						<img src="images/7.jpg" alt=" " class="img-responsive" />
 						<div class="w3_blur"></div>
 					</div>
 					<h3>Car</h3>
 					<p>We provide car lessons.Lesson are provided by trained drivering instructors. </p>

						<div class="w3layouts_more">
	 						<a href="enquiry-form.php" >Enquiry<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	 					</div>
						<?php if (!$_SESSION['userid']) { ?>
							<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#exampleModal"><span data-hover="Apply Now">Apply Now<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
					</div>
						<?php } ?>
 				</div>
 				<div class="col-md-4 agileits_services_grid">
 					<div class="w3_agile_services_grid1">
 						<img src="images/4.jpg" alt=" " class="img-responsive" />
 						<div class="w3_blur"></div>
 					</div>
 					<h3>HR Driving</h3>
 					<p>We provode HR lessons.
						 Lesson are provided by trained drivering instructors. </p>

						<div class="w3layouts_more">
	 						<a href="enquiry-form.php" >Enquiry<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	 					</div>
						<?php if (!$_SESSION['userid']) { ?>
							<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#exampleModal"><span data-hover="Apply Now">Apply Now<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
					</div>
						<?php } ?>
 				</div>
 				<div class="col-md-4 agileits_services_grid">
 					<div class="w3_agile_services_grid1">
 						<img src="images/5.jpg" alt=" " class="img-responsive" />
 						<div class="w3_blur"></div>
 					</div>
 					<h3>MC</h3>
 					<p>We provode HC lessons.
						Lesson are provided by trained drivering instructors. </p>

 					<div class="w3layouts_more">
 						<a href="enquiry-form.php" >Enquiry<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
 					</div>
					<?php if (!$_SESSION['userid']) { ?>
						<div class="w3layouts_more">
					<a href="#" data-toggle="modal" data-target="#exampleModal"><span data-hover="Apply Now">Apply Now<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
				</div>
					<?php } ?>

 				</div>
 				<div class="clearfix"> </div>
 			</div>
 		</div>
 	</div>
<!-- //services -->


	<!-- footer -->
	<?php include_once('includes/footer.php');?>

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