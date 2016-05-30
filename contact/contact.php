<?php
if($_POST["message"]) {
	$fromEmail = "From: " . $_POST['email'];
    mail("dhrchoi@gmail.com", $_POST["subject"], $_POST["message"], $fromEmail);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div class = "header nav">
	<nav>
		<div id = "logo"><a href = "../index.html"><img src="../images/Logo/images.jpg"><a></div>
		<ul>
			<li><a href="../calendar/index.html">Schedule</a></li>
			<li><a href="../menu/index.html">Menu</a></li>
			<li><a href="../about/index.html">About</a></li>
			<li><a href="../contact/index.html">Contact</a></li>
		</ul>
	</nav>
</div>

<article>
	<div class = "content" id = "content-contact">
		<div class = "bcg bcg-other" id = "bcg-contact">
			<h1><span>Contact</span></h1>
		</div>
		<div class = "container container-other" id = "container-contact">
			<div id = "contact-menu">
				<a href = "index.html#contactToHere"><div id = "contactForm"><h3>Contact</h3></div></a>
				<a href = "../booking/index.html#bookingToHere"><div id = "booking"><h3>Booking</h3></div></a>
			</div>
			<div id = "contactToHere"></div>
			<h1>Your Message Has Been Received<br>Thank You!</h1>
			
		</div>
	</div>
</article>
<footer style = "height: 300px; width: 100%">
	<h1>Connect</h1>
	<div class = 'social'><a href=""><img src="../images/Social_Media/fb1.jpg"></a></div>
	<div class = 'social'><a href=""><img src="../images/Social_Media/instagram.png"></a></div>
	<div class = 'social'><a href=""><img src="../images/Social_Media/twit.png" style = "background-color: white"></a></div>
	<div id = "caption">
		<figcaption>jeff@sumosaladtruck.com <hr width="20%" style= "margin: 0 auto"> Website by Daniel Choi</figcaption>
	</div>
</footer><script src="../js/main.js" type="text/javascript"></script>
</body>
</html>