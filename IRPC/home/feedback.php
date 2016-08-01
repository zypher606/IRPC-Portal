<?php

    require('includes/conn.inc');

    $user_name =$_POST['user_id'];
    $comment =$_POST['comment'];
    
 
    $sql="INSERT INTO feedback (user_name, comment, time)
        VALUES('$user_name', '$comment', NOW() )";

    $result=mysqli_query($conn, $sql);

    if ($result){

    echo "Thanks for ypur feedback...You are being redirected";
    header( "Refresh: 2 ; url= index.php");
        
    }

    else {
        
        echo "There was an error ... You are been redirected...";
        header( "Refresh: 2 ; url= index.php");
        
    }

?>