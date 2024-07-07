<?php 
session_start();
$vis = true;
if(isset($_SESSION['userid']))
{
	$vis = false;
}
?>
<html lang="en">
<head>
	
	<title> ExtraMile services</title>
	<link rel="stylesheet" href="uml-pro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	.sel 
	{
		font-weight: bold;
		font-size: 28px;
		
	}
		</style>

</head>
<body>
     <div class="banner">
             
        <div class="navbar" id = "navBar" data-sel='home' <?= ($vis==true)?'data-vis="true"':'data-vis="false"' ?> >	
            <!-- <img src="https://i.ibb.co/J32W5QH/exm-dribbble-4x-removebg-preview-1.png" class="logo">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">services</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
				<li><a href="#">sign in</a></li>
                                <li><a href="#">location</a></li>
			</ul> -->

		</div>	
		
	       <div class="content">
			<h3>24/7 on-spot</h3>
			<h1>Bike & Car<br><span>Services</span></h1>
			<h6>Any time & Any where in india</h6>
		</div>

               <div class="form">
			<h2> Vehicle Details</h2>
			<input type="text" name="vehicle" placeholder="Vehicle type">
			<input type="text" name="vehicle" placeholder="Vehicle brand">
			<input type="text" name="vehicle" placeholder="Vehicle model">
			<input type="text" name="vehicle" placeholder="Flue type">
			<button class="btnn"><a href="#">Submit Detalis</a></button>
				</div>

</div>
	   <section class="second">
                <div class="bike-h"><br><br>
			<span>Bike Services</span>
			<h1>we have all types of bike Services</h1>
		</div>
		<div class="bike-container container">
			<div class="box">
				<img src="https://i.ibb.co/ss4XtnZ/bike-1.jpg" alt="">
				<h2>General Services</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/g95tzGM/bike-2.jpg" alt="">
				<h2>Engine Repair</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/vQPFbN3/bike-3.jpg" alt="">
				<h2>Bike Breakdown</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/n8nDPrn/bike-4.jpg" alt="">
				<h2>Major Repairs</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/ZLTHP8c/bike-5.jpg" alt="">
				<h2>Bike Wash</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/D4Fx3qY/bike-6.jpg" alt="">
				<h2>Oil Services</h2>
			</div>
                        <div class="box">
				<img src="https://i.ibb.co/D4Fx3qY/bike-6.jpg" alt="">
				<h2>Spare Parts</h2>
			</div>
                        <div class="box">
				<img src="https://i.ibb.co/sy7jpd6/bike-7.jpg" alt="">
				<h2>Other Services</h2>
			</div>
		</div>

	   </section>
            <section class="third">
                <div class="car-h"><br><br>
			<span>Car Services</span>
			<h1>we have all types of Car Services</h1>
		</div>
		<div class="Car-container container">
			<div class="box">
				<img src="https://i.ibb.co/mXgChGd/car-1.jpg" alt="">
				<h2>General Services</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/4R2LyhD/car-2.jpg" alt="">
				<h2>oil services</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/chx7pZw/car-3.jpg" alt="">
				<h2>AC services</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/2h2Mf87/car-4.jpg" alt="">
				<h2>Puncture Services</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/b3MKRVt/car-5.jpg" alt="">
				<h2>Car Wash</h2>
			</div>
			<div class="box">
				<img src="https://i.ibb.co/GCdv8dN/car-6.jpg" alt="">
				<h2>Spare Parts</h2>
			</div>
                        <div class="box">
				<img src="https://i.ibb.co/682cFj4/car-7.jpg" alt="">
				<h2>Engine Repairs</h2>
			</div>
                        <div class="box">
				<img src="https://i.ibb.co/GR0cy0p/car-8.jpg" alt="">
				<h2>Other Services</h2>
			</div>
		</div>

	   </section>
                <section class="third">
		<img src="https://i.ibb.co/wykSvWS/quick-3.jpg" width="1500px" hight="50px">
	   </section>
           <section class="fourth">
		<img src="https://i.ibb.co/RNcXVDv/trusted.jpg" width="1500px" hight="50px">
	   </section>
           <section class="fifth">
           <div class="vedio">
           <center>
           <video controls 1oop muted poster="https://i.ibb.co/h2NghPn/poster.jpg" width=1280 hight=900>
           <source src="pro-vedio.mp4">
           </video></div>
           <!-- </center> -->
           </section>
            </section>
                <section class="sixth">
		<img src="https://i.ibb.co/YjsPQ2d/why-choose-us.jpg" width="1500px" hight="50px">
	   </section>
            <section class="footer">
			<footer class="footer-distributed">
				<div class="footer-left">
					<h3>Extra <span>Mile</span></h3>

					<p class="footer-links">
						
						<a href="index.php">Home</a>
						|
                                                <a href="service.php">Services</a>
						|
						<a href="about.php">About</a>
			
					</p>

					<p class="footer-company-name">Copyright @ 2023 <strong>Extra Mail</strong>
					All right reserved</p>
				</div>
				<div class="footer-center">
					<div>
						<i class="fa fa-map-marker"></i>
						<p><span>Visakhapatnam</span>Andhra Pradesh</p>	
					</div>
					<div>
						<i class="fa fa-phone"></i>
						<p><span>+91 9391230151</span></p>
					</div>
					<div>
						<i class="fa fa-envelope"></i>
						<p><a href="#"><span>extramile@gmail.com</span></a></p>
					</div>
				</div>
					<div class="footer-right">
						<p class="footer-company-about">
							<span>About the company</span>
							<strong>Extra Mile</strong>This is a car and bike services providing company .we can have expect mechanics 
						</p><br>
						<div class="footer-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
							
						
					</div>
			</footer>
		   </section>
	
<script src="./navScript.js"></script>
</body>
</html>