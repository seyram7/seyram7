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

	<!----header design--->
  <?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>reviews</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style2.css">


    <!---custom css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
<div class="container">
<div id="reviews" class="review-section">
<div class="d-flex align-items-center justify-content-between mb-4">
<h4 class="m-0">4 Reviews</h4>

</div>
<div class="row">
<div class="col-md-6">
<table class="stars-counters">
<tbody>
<tr class="">
    <td>
        <span>
            <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
        </span>
    </td>
    <td class="progress-bar-container">
        <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
            <div class="fit-progressbar-background">
                <span class="progress-fill" style="width: 97.2973%;"></span>
            </div>
        </div>
    </td>
    <td class="star-num">(6)</td>
</tr>
<tr class="">
    <td>
        <span>
            <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">4 Stars</button>
        </span>
    </td>
    <td class="progress-bar-container">
        <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
            <div class="fit-progressbar-background">
                <span class="progress-fill" style="width: 2.2973%;"></span>
            </div>
        </div>
    </td>
    <td class="star-num">(1)</td>
</tr>
<tr class="">
    <td>
        <span>
            <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">3 Stars</button>
        </span>
    </td>
    <td class="progress-bar-container">
        <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
            <div class="fit-progressbar-background">
                <span class="progress-fill" style="width: 0;"></span>
            </div>
        </div>
    </td>
    <td class="star-num">(0)</td>
</tr>
<tr class="">
    <td>
        <span>
            <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">2 Stars</button>
        </span>
    </td>
    <td class="progress-bar-container">
        <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
            <div class="fit-progressbar-background">
                <span class="progress-fill" style="width: 0;"></span>
            </div>
        </div>
    </td>
    <td class="star-num">(0)</td>
</tr>
<tr class="">
    <td>
        <span>
            <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">1 Stars</button>
        </span>
    </td>
    <td class="progress-bar-container">
        <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
            <div class="fit-progressbar-background">
                <span class="progress-fill" style="width: 0;"></span>
            </div>
        </div>
    </td>
    <td class="star-num">(0)</td>
</tr>
</tbody>
</table>
</div>
<div class="col-md-6">
<div class="ranking">
<h6 class="text-display-7">Rating Breakdown</h6>
<ul>
<li>
    Service<span>5<span class="review-star rate-10 show-one"></span></span>
</li>
<li>
    Ambient<span>5<span class="review-star rate-10 show-one"></span></span>
</li>
<li>
    Orderliness<span>4.9<span class="review-star rate-10 show-one"></span></span>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="review-list">
<ul>
<li>
<div class="d-flex">
<div class="left">
<span>
<img src="https://bootdey.com/img/Content/avatar/avatar8.png" class="profile-pict-img img-fluid" alt="" />
</span>
</div>
<div class="right">
<h4>
    Amy C.
    <span class="gig-rating text-body-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
            <path
                fill="currentColor"
                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
            ></path>
        </svg>
        5.0
    </span>
</h4>
<div class="country d-flex align-items-center">
    <span>
        <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" />
    </span>
</div>
<div class="review-description">
    <p>
   Very beautiful place to stay. I will be backhere with more of my friend :)
    </p>
</div>
<span class="publish py-3 d-inline-block w-100">Hike Camping Pitches February 2022</span>

<div class="response-item mt-4 d-flex">
    <div class="left">
        <span>
            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="profile-pict-img img-fluid" alt="" />
        </span>
    </div>
    <div class="right">
        <h4>
            Bobby B.
            <span class="gig-rating text-body-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                    <path
                        fill="currentColor"
                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                    ></path>
                </svg>
                4.9
            </span>
        </h4>
        <div class="country d-flex align-items-center">
            <span>
                <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar4.png" />
            </span>
        </div>
        <div class="review-description">
            <p>
      Nice and spacious pitch 👍
            </p>
        </div>
        <span class="publish py-3 d-inline-block w-100">Winter Camping Pitches July 2021</span>
    </div>
</div>
</div>


<div class="right">
<h4>
Emily K.
    <span class="gig-rating text-body-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
            <path
                fill="currentColor"
                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
            ></path>
        </svg>
        4.8
    </span>
</h4>
<div class="country d-flex align-items-center">
    <span>
        <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" />
    </span>
</div>
<div class="review-description">
    <p>
  Clean shower and toilet, the interior is beautiful
    </p>
</div>
<span class="publish py-3 d-inline-block w-100">Motorhome - RV Camping January 2022
</span>

<div class="response-item mt-4 d-flex">
    <div class="left">
        <span>
            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="profile-pict-img img-fluid" alt="" />
        </span>
    </div>
    <div class="right">
        <h4>
            Martin W.
            <span class="gig-rating text-body-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                    <path
                        fill="currentColor"
                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                    ></path>
                </svg>
                5.0
            </span>
        </h4>
        <div class="country d-flex align-items-center">
            <span>
                <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar3.png" />
            </span>
        </div>
        <div class="review-description">
            <p>
     Good campsite. It has a close proximity the beach and a local restaurant
            </p>
        </div>
        <span class="publish py-3 d-inline-block w-100">Tent Camping - June 2022</span>
    </div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>



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

</body>
</html>