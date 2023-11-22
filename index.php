<?php
include("site.php"); 
include("config.php");
  $ip_address =$_SERVER['REMOTE_ADDR'];

   $sel = "SELECT * FROM  counter WHERE ip = '$ip_address'";
   $selcom = mysqli_query($new,$sel);
    $total = mysqli_num_rows($selcom);

   if($total < 1) {
   	  $insert ="INSERT INTO counter (ip) VALUES ('$ip_address')";
   	   $CON = mysqli_query($new,$insert);
   } 

?>


<?php
 
$web_url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 
$str = "<?xml version='1.0' ?>";
$str .= "<rss version='2.0'>";
    $str .= "<channel>";
        $str .= "<title>My website</title>";
        $str .= "<description>My website</description>";
        $str .= "<language>en-US</language>";
        $str .= "<link>$web_url</link>";
 
        $result = mysqli_query($new, "SELECT * FROM campsite ORDER BY id DESC");
 
        while ($row = mysqli_fetch_object($result))
        {
            $str .= "<item>";
                $str .= "<title>" . htmlspecialchars($row->name) . "</title>";
                $str .= "<description>" . htmlspecialchars($row->note) . "</description>";
                $str .= "<link>" . $web_url . "/campsite.php?id=" . $row->id . "</link>";
            $str .= "</item>";
        }
 
    $str .= "</channel>";
$str .= "</rss>";
 
file_put_contents("rss.xml", $str);
echo "Done";
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
	<!----home section design--->
	<section class="home" id="home">
		<div class="home-text">
			
			<h1>Wild</h1>
			<h3>Swimming<span> Camping Site.</span></h3>

			
<form>
  <div>
    <input type="search" id="mySearch" placeholder="Search...." name="q" style="width:300px;height: 50px;">
   <div class="button">
				<a href="#" class="btn">Search</a>
			</div>
  </div>
</form>
		</div>
	</section>

	<!----about section design--->
	<section class="about" id="about" name="slide">
		<div class="about-img">
		<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 2</div>
    <img src="img/swimming1.jpg" alt="homeimg">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 2</div>
    <img src="img/swimming2.jpg" alt="homeimg">
    <div class="text"></div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <!-- <span class="dot" onclick="currentSlide(3)"></span> -->
</div>
		</div>

		<div class="about-text">
			<h2 id="ik">About <span>us</span></h2>
			<h4 id="ik">Wild swimming :)</h4>
			<p id="ik">It's the special outdoor adventure that comes with camping! If you reserve a spot at one of these wild swimming campgrounds, you'll be able to take a refreshing swim in a nearby lake, river, or even waterfall.</p>
			<a href="#" class="btn">More About</a>
		</div>
	</section>
 
	<!----portfolio section design--->
	<section class="portfolio" id="portfolio">
		<div class="main-text">
			<h2 id="ik">Beautiful and Magical places & <br><span>you can visit</span></h2>
		</div>

		<div class="portfolio-content">
			<div class="row">
				<img src="img/sea1.jpg" id="homeimg">
				<div class="layer">
					<h5>Campsite</h5>
					<p>Campsite on the beach with a fantastic atmosphere</p>
					<a href="#"><i class='bx bx-link-external' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/Beach1.webp" alt="homeimg" id="homeimg">
				<div class="layer">
					<h5>Private</h5>
					<p>Secluded location with a private beach and organic food </p>
					<a href="#"><i class='bx bx-link-external' ></i></a>
				</div>
			</div>


			<div class="row">
				<img src="img/seabeach1.jpg" alt="homeimg" id="homeimg">
				<div class="layer">
					<h5>Greeka</h5>
					<p>Athens, Greece is the Greeka get away for the weekend at sea.</p>
					<a href="#"><i class='bx bx-link-external' ></i></a>
				</div>
			</div>

			
		</div>
	</section>

	
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253609.67064012794!2d-1.756192812569436!3d6.690065684921107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb93e59a4e4c49%3A0x829c711d7b65e682!2sKumasi!5e0!3m2!1sen!2sgh!4v1674489853384!5m2!1sen!2sgh" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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

	<script type="text/javascript">
		
		var i = 0;
		var images = [];
		var time  = 3000;
		images[0] = 'img/portfolio1.jpg';
		images[1] = 'img/portfolio1.jpg';
		images[2] = 'img/portfolio2.jpg';

		function changeImg() {
			document.slide.src = images[i];
			if(i < images.length -1){
				i++;
			} else {
				i = 0;
			}
		}
	</script>

</body>
</html>