<?php

    require('includes/conn.inc');

    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $email =$_POST['email'];
    $pass = $_POST['pass'];
    $category =$_POST['category'];



    $hash = password_hash("$pass", PASSWORD_BCRYPT, ['cost' => 12,]);
 
    $sql="INSERT INTO user_info(first_name, last_name, user_email, user_password, category)
        VALUES('$first_name', '$last_name', '$email', '$hash', '$category' )";

    $result=mysqli_query($conn, $sql);

    if ($result){

    echo "Your account has been sucessfully registered...You are being redirected";
    header( "Refresh:2; url= index.html");
        
    }

    else {
        
        echo "There was an error ... You are been redirected...";
        header( "Refresh:2; url= index.html");
        
    }

?>