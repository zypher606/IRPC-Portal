<?php

session_start();


$email =$_POST['email'];
$pass = $_POST['pass'];



        if ($pass == "852456") {
            echo'Sucessfully logged in !';
            $_SESSION['admin']= "Admin";
            header("Location: index.php");
                    
            }
                
                
        else {
                header("Location:login_form.php");
            }


?>