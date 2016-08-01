<?php

    include("includes/auth.inc");
    include("includes/nav.php");


    $user_id = $_SESSION['logged_user'] ;

    $result23 = mysqli_query($conn, "SELECT post_id FROM post_w_participate WHERE  user_id='$user_id'") ;
    
        
        while ($row = mysqli_fetch_array($result23)) {
            
            $post_id = $row["post_id"];
    



$result2 = mysqli_query($conn, "SELECT * FROM post_admin_details WHERE  post_id ='$post_id'") ;



    if($result2){
        
        
        while ($row = mysqli_fetch_array($result2)) {
            
            $post_genre=$row["post_genre"];
            $genre = explode(',', $post_genre);
            $max_genre = sizeof($genre);
            $post_title = $row["post_title"];
            $post_id = $row['post_id'];
            $post_time=$row["post_time"];
            $post_user = $row['user_name'];
                            

            
                echo '
                
                        <div id="post">
    
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="post_only.php?post_id='.$post_id.'"><h3>'.$post_title.'</h3></a>
                    </div>
    
                    
                    
                    <blockquote class="blockquote-reverse">
                        <footer>'.$post_user.'</footer>
                    </blockquote>
                    
                </div>
               
        </div> 
                
                
                
                
                ';
                
        
                
    
            }
        }
        
   
    }
            
        
        
        




?>

<html>

    <head>
    
        <link type="text/css" rel="stylesheet" href="css/feed.css">
    
    </head>
    
    
    <body>
        
             
        
    
        
        
    
    
    
    </body>



</html>