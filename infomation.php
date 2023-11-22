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
			<h2><span>Infor</span>mation</h2>
			<h4>Below is a description of the various pitch types that you can reserve on our Club Sites.</h4>
		</div>

		<div class="services-content">
			<div class="box">
				<div class="s-icons">
					<i class='bx bx-mobile-alt' ></i>
				</div>
				<h3 id="ik">GWE</h3>
				<p id="ik">
We have grass pitches Measuring 8m x 5m.</p>
 <p id="ik">Location:Philadephia</p>
 <p id="ik">Status : Avialable</p>
			</div>

			<div class="box">
				<div class="s-icons">
					<i class='bx bx-code-alt' ></i>
				</div>
				<h3 id="ik">SWE</h3>
				<p id="ik">
These are ptches for motor home or caravan. Measuring 15m x 10m.</p>
 <p id="ik">Location:Washington</p>
 <p id="ik">Status : Avialable</p>
			</div>

			<div class="box">
				<div class="s-icons">
					<i class='bx bx-edit-alt' ></i>
				</div>
				<h3 id="ik">FWE</h3>
				<p id="ik">Grass Pitches for tent measuring more than 5m x 9m.</p>
				 <p id="ik">Location:Atlanta</p>
 <p id="ik">Status : Avialable</p>
			</div>

		</div>
	</section>
 
	<!----portfolio section design--->
	<section class="portfolio" id="portfolio">
		<div class="main-text">
			<h2 id="ik">Place of interest</h2>
		</div>

		<div class="portfolio-content">
			<div class="row">
				<img src="img/saranac.jpg" id="homeimg">
				<div class="layer">
					<h5>Saranac Lake</h5>
					<p>Saranac Lake, NY, USA</p>
					<a href="#"><i class='bx bx-link-external' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/bigbend.webp" id="homeimg">
				<div class="layer">
					<h5>Big Bend National Park</h5>
					<p>Big Bend National Park, TX, United States</p>
					<a href="#"><i class='bx bx-link-external' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/denali.jpg" id="homeimg">
				<div class="layer">
					<h5>Denali National Park</h5>
					<p> Alaska, United States</p>
					<a href="#"><i class='bx bx-link-external' ></i></a>
				</div>
			</div>
			<!-- whmpass -->

			<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45666.026599625286!2d-74.16820136252578!3d44.32790160047049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccb103211431f41%3A0xfce94156e5a2168c!2sSaranac%20Lake%2C%20NY%2C%20USA!5e0!3m2!1sen!2sgh!4v1674647953335!5m2!1sen!2sgh" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d445581.65739641007!2d-103.85990481093748!3d29.2498194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86f217704be5ef2b%3A0x64467dbc2783850f!2sBig%20Bend%20National%20Park!5e0!3m2!1sen!2sgh!4v1674648301987!5m2!1sen!2sgh" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7228.186862826312!2d-151.01728391044904!3d63.06916807618111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x56cde603306d1c1b%3A0xb36f3b95ebe1ce02!2sDenali!5e0!3m2!1sen!2sgh!4v1674648645047!5m2!1sen!2sgh" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

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
<img src="img/rss.png" id="rss">
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