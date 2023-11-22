<?php
include("site.php"); 
include("config.php");
$message = "";

if(isset($_POST['submit'])){

	$first_name = mysqli_real_escape_string($new,$_POST['first_name']);
	$last_name = mysqli_real_escape_string($new,$_POST['last_name']);
	$email = mysqli_real_escape_string($new,$_POST['email']);
	$password = mysqli_real_escape_string($new,$_POST['password']);

	if(!empty($first_name)){
		$cpas = md5($password);
		$date = date("Y-d-m");

		$insert = mysqli_query($new,"INSERT INTO users (first_name,last_name,email,password,date) VALUES ('$first_name','$last_name','$email','$cpas','$date')");
		    header("location:login.php");

	}  else{
      $message = "<h4 style='color:red'>Registration Failed</h4>";
	}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact us </title>
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
	<header id="i">
	      <?php include("header.php");?>

	</header>

<br  /><br   /> <br  /><br   />

 
	<!----portfolio section design--->
	<section class="portfolio" id="portfolio" style="background-color: black;">
		<div class="main-text">
			<h2>Register <span>Here</span></h2>
		</div>
		<center>
		<div class="portfolio-content">
	<div class="contact-form" id="ik">
			<form method="POST">
			   <input type="text" placeholder="First Name" name="first_name" required id="ikk" class="form1"><br />
			  <input type="text" placeholder="Surname" name="last_name" required id="ikk" class="form1"><br />
		<input type="email" placeholder="Email Address" name="email" required id="ikk" class="form1"><br/>
	<input type="password"  name="password" placeholder="Password" required id="ikk"><br />

		<input type="submit" placeholder="Register" name="submit"  class="submit">


			 <div class="g-recaptcha mb-3" data-sitekey="<?php //echo $siteKey; ?>"></div>
			</form>
			 <a href="login.php" id="w">Login here</a>
		</div>
		</div>
		</center>
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


	<!---custom js link--->
	<script type="text/javascript" src="js/script.js"></script>
	<script async src="https://api.countapi.xyz/hit/http:localhost/kingbello/index.html/visits?callback=5"></script>

</body>
</html>