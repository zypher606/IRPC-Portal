<?php
    

    require('includes/conn.inc');
    $array = $_POST['check_list'];
    $post_id = $_POST['post_id'];
    $string = implode(',', $array);
    echo $string;

    $sql1="SELECT * FROM post_user_details WHERE post_id ='$post_id'";
$result1=mysqli_query($conn, $sql1);

// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysqli_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysqli_fetch_array($result1);
$user_id=$rows['user_id'];
$user_name=$rows['user_name'];    
$post_title=$rows['post_title'];
$post_description=$rows['post_description']; 
$post_time=$rows['post_time']; 

// Insert data that retrieves from "temp_members_db" into table "registered_members" 
    
     $sql2="INSERT INTO post_admin_details(user_id, user_name, post_title, post_description, post_time, post_genre)
        VALUES('$user_id', '$user_name', '$post_title', '$post_description' , '$post_time', '$string')";
    
$result2=mysqli_query($conn, $sql2);
}
}
    
    $sql3="DELETE FROM post_user_details WHERE post_id = '$post_id'";
$result3=mysqli_query($conn, $sql3);


      header("Location:index.php");


	
?>