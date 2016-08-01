<?php  


require('includes/conn.inc');
require('includes/auth.inc');

$post_title = $_POST['post_title'];
$post_description = $_POST['post_description'];
$user_id = $_SESSION['logged_user'];
$user_name = $_SESSION["logged_user_f_name"].' '.$_SESSION["logged_user_l_name"];
    
$sql="INSERT INTO post_user_details(post_title, post_description, user_id, user_name,  post_time)
        VALUES('$post_title', '$post_description', '$user_id', '$user_name', NOW()  )";

    $result=mysqli_query($conn, $sql);

    echo "Post has been added sucessfully ... You are been redirected...";
    header( "Refresh:2; url= index.php");


?>