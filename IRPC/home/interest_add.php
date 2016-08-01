<?php
    

    require('includes/conn.inc');
    require('includes/auth.inc');
    $user_id=$_SESSION['logged_user'];
    $array = $_POST['check_list'];
    $string = implode(', ', $array);


    $result = mysqli_query($conn, "UPDATE user_info SET user_interests='".$string."' WHERE user_id=".$user_id);

    echo "Interests Updated ... You are been redirected...";
    header( "Refresh:2; url= index.php");


	
?>