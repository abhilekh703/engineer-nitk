<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    
    <link href="css/main.css" rel="stylesheet">
    <link href="css/util.css" rel="stylesheet">
 <!--   <script type="text/javascript" src="js/main.js"></script> -->
    <script src="js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="js/parallax.min.js"></script>
<!--Counter up -->
<script src="js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="js/wow.min.js"></script>

</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="register.php">
				<span class="contact100-form-title">
					Workshop Registration
				</span>
				<span class="contact100-form-title">
					Big Data
				</span>
				<?php include('errors.php'); ?>
				
				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name" value="<?= $firstname ?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Last name" value="<?= $lastname ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" value="<?= $email ?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 9999999999"
					value="<?= $phone ?>">
					<span class="focus-input100"></span>
				</div>
			<!--	<label class="label-input100" for="message">Message *</label>
			<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>  -->

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="reg_user">
					    Register
					</button>
				</div> 
				
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('logo.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							NITK Surathkal , Mangalore - 575025
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+91 999999999
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							engineer.18nitk@gmail.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>