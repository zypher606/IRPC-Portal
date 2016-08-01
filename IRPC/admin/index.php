<?php 

require('includes/auth.inc');
require('includes/conn.inc');

echo "<a href='logout.php'>Logout</a>";

$result2 = mysqli_query($conn, "SELECT * FROM post_user_details") ;



    if($result2){
        
        
        while ($row = mysqli_fetch_array($result2)) {
            
            $post_title = $row["post_title"];
            $post_id = $row['post_id'];
            $post_time=$row["post_time"];
            $post_user = $row['user_name'];
            
            
            
            
//                echo $post_title;
//                echo $post_user;
//                echo $post_time;
//                echo $post_genre;
//                echo '<br />';
            
                echo '<div class="post">
            <div class="title"><a href="post.php?post_id='.$post_id.'"><p>'.$post_title.'</p></a></div>
            <div class="by">by:'.$post_user.'</div>
            <div class="time">'.$post_time.'</div>
        </div>';
                
            
   
        }
        
   
    }

   

?>

<html>

<link type="text/css" rel="stylesheet" href="css/mobile.css">
    
    
</html>