<?php session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<style>
	.login{

background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/login.jpeg) ;
background-attachment:fixed;  
background-size :1900px;
 /* background-repeat:no-repeat; */ 
background-position:100%; 

}
</style>
</head>

<body>
	<?php
		require('login_nav.php');
		
	?>

	<section class="login">
		<div class="loginbox">
			<h2>Create new account </h2>

			<form name="HtmlForm" method="post" action="regconfig.php" class="form">
				<ul>
					<li class="form-line">
						<div>
							<b><label class="level">Username</label></br>
								<i class="fa fa-user"></i>
								<span class="sub">

									<input type="name" name="username" class="form-control" placeholder="username "
										required>
								</span>
						</div>
					</li>
					<li class="form-line">
						<div>
							<label class="level">Email</label><br />
							<i class="fa fa-envelope"></i>
							<span class="sub">

								<input type="email" name="email" class="form-control" placeholder="email" required>
							</span>
						</div>
					</li>
					<li class="form-line">
						<div>
							<label class="level">Password</label></br>
							<i class="fa fa-lock"></i>
							<span class="sub">

								<input type="password" name="password" class="form-control" placeholder="password"
									required>
							</span>
						</div>
					</li>
					<li class="form-line">
						<input type="Submit" class="btn btn-danger">
					</li>
				</ul>
				<a href="#">Forgotten Password</a>
				<hr>
				<p class="note">Don't have an account yet?</p>
				<a href="login.php">Already have account</a>
		</div>
		</form>
</div>
</section>

		<!-- Footer section start -->
		<section>
			<div class="main-footer">
				<div class="inner-footer">
					<div class="container px-50">
						<div class="row ">
							<div class="col-lg-3 col-sm-6 contact-us pt-sm-0 pt-4">
								<h6>OUR POLICIES</h6>
								<ul>
									<li>
										<a href="#">
											Privacy Policy
										</a>
									</li>
									<li>
										<a href="#">
											Terms of Services
										</a>
									</li>
									<li>
										<a href="#">
											Cancellation & Refund
										</a>
									</li>

								</ul>

							</div>
							<div class="col-lg-3 col-sm-6 contact-us pt-sm-0 pt-4">
								<h6>Contact us</h6>
								<ul>
									<li>
										<a href="tel: +9841296726">
											(+977) 984-1296726
										</a>
									</li>
									<li>
										<a href="#">
											akalikobakery@gmail.com
										</a>
									</li>
									<li>
										<a href="google_map.html">
											Jyoti Bhawan,Kathmandu
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-6 links pt-lg-0 pt-4" id="quick">
								<h6>Quick Links</h6>
								<ul>
									<li>
										<a href="index.php">
											Home
										</a>
									</li>
									<li>
										<a href="#">
											About us
										</a>
									</li>
									<li>
										<a href="#">
											Category
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-6 subscribe pt-lg-0 pt-4">
								<h6>Subscribe Now</h6>
								<form class="form-inline input-group">
									<input class="form-control" type="search" placeholder="Your E-mail address..."
										aria-label="Search">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">SUBMIT</button>
									</div>
								</form>
								<div class=" text-right social">
									<a href="#">
										<img class="img-fluid" src="images/fb.svg" alt="">
									</a>

									<a href="#">
										<img class="img-fluid" src="images/insta.svg" alt="">
									</a>
									<a href="#">
										<img class="img-fluid" src="images/skype.svg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Copyright start -->
			<div class="copyright">
				<div class="container text-center text-black">
					<p>&copy;2023, All rights reserved,AkaliKo Bakery(Pvt.)Ltd</p>
				</div>
			</div>
			<!-- Copyright end -->
			</footer>
			<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
			<script>
				//Get the button
				var mybutton = document.getElementById("myBtn");

				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						mybutton.style.display = "block";
					} else {
						mybutton.style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}

				function HandleClick() {
					var email = document.LogIn.email.value;
					var Password = document.LogIn.password.value;
					if (email != "akalikobakery@gmail.com" && Password != "Akali123") {
						alert("Please check whether your email and password are correct");
						return false;
						console.log = "gret"
					}

				}
			</script>




		</section>


</body>

</html>