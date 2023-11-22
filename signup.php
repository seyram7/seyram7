<?php
     require 'config.php';   
        //CHeck to see if the form has been submitted
        if(isset($_POST['submit']))
            
        {
            //Check to see all fields have been completed
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm password']
            $email = $_POST['email'];
            
            //Create an SQL query to add the comment
            $query = "INSERT INTO tb_user(userName, email, password) VALUES ('$username', '$email', '$password')";
            
            $result = $db->query($query);
                if($result)
                    echo 'Registration Succesful';
            $db->close();
        }
    ?>