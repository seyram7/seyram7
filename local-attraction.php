<?php
include("site.php");
include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Wild Swimming and Camping </title>
	<!---custom css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	 <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

       <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>

	<!----header design--->
      <?php include("header.php");?>
<br   /><br  ?>
	<!----service section design--->
	<section class="services" id="services">
		<div class="main-text">
			<h2><span>Local</span> Attractions</h2>
			
		</div>
	</section>
 
	<!----portfolio section design--->
	<section class="portfolio" id="portfolio">
		<div class="main-text">
			<h2 id="ik"></h2>
		</div>

		<div class="portfolio-content">
			<div class="row">
				<img src="img/kilimanjaro.jpg" id="homeimg">
				<div class="layer">
					<h5> Mountain Kilimanjaro located in Tanzania</h5>
				</div>
			</div>

			<div class="row">
			<img src="img/zanzibar2.jpg" id="homeimg">
				<div class="layer">
					<h5>Changuu Island located in Zanzibar</h5>
				</div>
			</div>

			<div class="row">
				<img src="img/zanzibar.jpg" id="homeimg">
				<div class="layer">
					<h5>Prison Island located in Zanzibar</h5>
				</div>
			</div>
			<!-- whmpass -->
		</div>
	</section>

	<!----contact section design--->
	<section class="contact" id="contact">
		<div class="contact-text">
			<h2>GWS <span>C</span></h2>
			<h4>Want a beauiful Getaway</h4>
			<p>Each of us has a small portion of the great outdoors. It's the area that's most unrestricted, carefree, and joyful. </p>
			<div class="list">
			<li><a href="#">hello@gwsc.com</a></li>
				<li><a href="#">+233 (0) 549 648 893</a></li>
				<li><a href="register.php">Create account</a></li>
				<li><a href="login.php">Login</a></li>

			</div>


		<p>This page was viewed</p>
		<?php

		$sel = "SELECT * FROM  counter";
   $selcom = mysqli_query($new,$sel);
    $total = mysqli_num_rows($selcom);
		?>
		<h1 id="visits"><?= $total;?></h1>
		<p>Counter</p>

		</div>


		<div class="contact-form">
			<form action="">
				<input type="name" placeholder="Full Name" required id="ik">
				<input type="email" placeholder="Email Address" required id="ik">
				<input type="" placeholder="Mobile Number" required id="ik">
				<textarea name="" id="ik" cols="35" rows="10" placeholder="Message" required></textarea>
				<input type="submit" value="Send" class="submit" required>
				    <div class="g-recaptcha mb-3" data-sitekey="<?php echo $siteKey; ?>"></div>

			</form>

			<br> <br>

			<div class="contact-icons">
				<a href="#"><i class='bx bxl-facebook' ></i></a>
				<a href="#"><i class='bx bxl-twitter' ></i></a>
				<a href="#"><i class='bx bxl-youtube' ></i></a>
				<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
			</div>

<br> <br>
		<a href="rss.xml" target="_blank">
<img src="img/rss.png" style="width:50px;height:50px">
</a>
		</div>

	</section>


	<section class="end">
		<div class="last-text">
			<p id="ik">Copyright © 2022 Global Wild Swimming and Camping (GWSC).</p>
		</div>

		<div class="top">
			<a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
		</div>
	</section>
	<!---custom js link--->
	<script type="text/javascript" src="js/script.js"></script>
	<script async src="https://api.countapi.xyz/hit/http:localhost/kingbello/index.html/visits?callback=5"></script>



</body>
</html>