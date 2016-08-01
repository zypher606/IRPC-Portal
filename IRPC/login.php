<?php

session_start();

require('includes/conn.inc');

$email =$_POST['email'];
$pass = $_POST['pass'];

$result = mysqli_query($conn, "SELECT * FROM user_info WHERE user_email='$email'");

$count = $result->num_rows ;




    if($count!=0){
        
        while ($row = mysqli_fetch_array($result)) {
            $hash = $row["user_password"];
            $user_id=$row["user_id"];
            $f_name = $row["first_name"];
            $l_name = $row["last_name"];
            $user_cat = $row["category"];
            $user_mail = $row["user_email"];   
        }

        if (password_verify($pass,$hash)) {
            echo'Sucessfully logged in !';
            $_SESSION['logged_user']=$user_id;
            $_SESSION['logged_user_f_name']=$f_name;
            $_SESSION['logged_user_l_name']=$l_name;
            $_SESSION['logged_user_cat']=$user_cat;
            $_SESSION['logged_user_mail']=$user_mail;
            $query=mysqli_query($conn,"SELECT user_interests FROM user_info WHERE user_id=".$user_id);
            
            $row=mysqli_fetch_array($query) ;
            $user_interests=$row['user_interests'];
                if(empty($user_interests)){
                   header("Location:home/index.php");
                }
                else {
                    
                    header("Location: home/index.php");
                    
                }
                
                
            
            }
            else {
                echo "Invalid Password ... You are been redirected...";
                header( "Refresh:2; url= index.html");
            }
    }
    
    else {
        echo "Invalid Email ... You are been redirected...";
        header( "Refresh:2; url= index.html");
    } 

?>