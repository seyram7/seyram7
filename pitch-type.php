<?php include("site.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pitch Type</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style1.css">


<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<div class="container">
      <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 mb-3">
                  <br  /><br   /><br   />
                  <a href="index.php">Go Back</a>
          <form method="POST">
          <div class="row text-left mb-5">
               <div class="col-lg-9 mb-3 mb-sm-0">
              <input type="text" name="search" class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" placeholder="Search....">
            </div>
            <div class="col-lg-3 text-lg-right">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
            </div>
            </form>
          </div>
          <!-- End of post 1 -->



<?php 


include("config.php");

if(isset($_POST['submit'])){

$search = mysqli_real_escape_string($new,$_POST['search']);

$ser = "SELECT * FROM  pitch_type  WHERE  location = '$search'";
 $cn = mysqli_query($new,$ser);

//$fetch = mysqli_num_rows($ser);

 while($fow = mysqli_fetch_array($cn)){

    echo ' <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">'.$fow['name'].' </a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">Admin</a> <span class="op-6">Date</span> <a class="text-black" href="#">'.$fow['date'].'</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#"></a> <a class="text-black mr-2" href="#"></a> <a class="text-black mr-2" href="#">'.$fow['note'].'</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1">Availablility</i> <span class="d-block text-sm">'.$fow['availability'].'</span> </div>
                  
                  <div class="col px-1">Tent Pitch</i> <span class="d-block text-sm">'.$fow['tent_pitch'].'</span> </div>

                  <div class="col px-1">Touring Pitch <span class="d-block text-sm">'.$fow['touring_pitch'].'</span> </div>

                  <div class="col px-1">Motorhome Pitch <span class="d-block text-sm">'.$fow['motorhome_pitch'].'</span> </div>

                </div>
              </div>
            </div>
          </div>';


}

}

?>

       







        </div>
      </div>
    </div>



</body>
</html>