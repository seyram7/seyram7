<?php
include("site.php"); 
include("config.php");
$message = "";

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($new,$_POST['name']);
	$location = mysqli_real_escape_string($new,$_POST['location']);
	$availability = mysqli_real_escape_string($new,$_POST['availability']);
	$tent_pitch = mysqli_real_escape_string($new,$_POST['tent_pitch']);
	$touring_pitch = mysqli_real_escape_string($new,$_POST['touring_pitch']);
	$motorhome_pitch = mysqli_real_escape_string($new,$_POST['motorhome_pitch']);
	$note = mysqli_real_escape_string($new,$_POST['note']);

	if(!empty($location)){

		$date = date("Y-d-m");

		$insert = mysqli_query($new,"INSERT INTO pitch_type (name,location,availability,tent_pitch,touring_pitch,motorhome_pitch,note,date) VALUES ('$name','$location','$availability','$tent_pitch','$touring_pitch','$motorhome_pitch','$note','$date')");
		    //header("location:login.php");

		      $message = "<h4 style='color:green'>Successful </h4>";


	}  else{
      $message = "<h4 style='color:red'>Submission failed</h4>";
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
			<h2>Add <span>Type</span></h2>
			<?php echo $message;?>
		</div>
		<center>
		<div class="portfolio-content">
	<div class="contact-form" id="ik">
			<form method="POST">
				<input type="text" placeholder=" Name" name="name" required id="ikk" class="form1"><br />
			   <input type="text" placeholder=" Location" name="location" required id="ikk" class="form1"><br />
			  <input type="text" placeholder="Avialability" name="availability" required id="ikk" class="form1"><br />
		<input type="text" placeholder="Tent pitch" name="tent_pitch" required id="ikk" class="form1"><br/>
	<input type="text"  name="touring_pitch" placeholder="Touring caravan pitch"  id="ikk"><br />
	<input type="text"  name="motorhome_pitch" placeholder="Motorhome pitch"  id="ikk"><br />

	 <textarea name="note"  id="ikk" placeholder="Note...."></textarea><br />

		<input type="submit" name="submit" class="submit">
			</form>
		</div>
		</div>
		</center>
	</section>


	<!----end section design--->
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