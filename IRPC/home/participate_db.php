<?php

require('includes/auth.inc');
require('includes/conn.inc');


$user_id_logged = $_SESSION['logged_user'];
$user_name = $_SESSION['logged_user_f_name'].' '.$_SESSION['logged_user_l_name'];
$post_id = $_POST['post_id'];
$value = $_POST['same'];


if ($value == 'participate') {
    
    $result = mysqli_query($conn, "INSERT INTO post_participate(user_name, user_id, post_id) VALUES ('$user_name','$user_id_logged', '$post_id') ");
    
}

elseif ($value == 'willing_part') {
    
    $result = mysqli_query($conn, "INSERT INTO post_w_participate(user_name, user_id, post_id) VALUES ('$user_name','$user_id_logged', '$post_id') ");
    
}

elseif ($value == 'willing_assist') {
    
    $result = mysqli_query($conn, "INSERT INTO post_w_assist(user_id, post_id) VALUES ('$user_id_logged', '$post_id') ");
    
}

elseif ($value == 'mentor') {
    
    $result = mysqli_query($conn, "INSERT INTO post_mentor(user_id, post_id) VALUES ('$user_id_logged', '$post_id') ");
    
}



else {
    
    $result = mysqli_query($conn, "INSERT INTO post_not_interested(user_id, post_id) VALUES ('$user_id_logged', '$post_id') ");

}

        echo "Your response has been recorded ... You are been redirected...";
        header( "Refresh:2; url= index.php");


?>