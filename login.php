<?php

if(isset($_POST['submit'])) {
    
    
$email = $_POST['email'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost', 'root', '', 'gwcs');
if($connection) {
echo "we are connected";
}  else {
die("Database connection failed");
 }
    
    $query = "INSERT INTO tb_user(email,password) ";
    $query .= "VALUES ('email', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        
        die('Query FAILED' . mysqli_error());
    }
}
 
?>