<?php

    include('includes/auth.inc');
    include("includes/nav.php");

    $category=$_SESSION['logged_user_cat'];

    $post_id = $_GET['post_id'];

    $result2 = mysqli_query($conn, "SELECT * FROM post_admin_details WHERE  post_id='$post_id'") ;

    if($result2){
        
            $row = mysqli_fetch_array($result2) ;
            
           
            $post_title = $row['post_title'];
            $post_time=$row["post_time"];
            $post_genre = $row['post_genre'];
            $post_description=$row["post_description"];
            $user_name=$row["user_name"];
           
        
           echo '<div id="post">
    
                <div class="panel panel-default">
                    <div class="panel-body">
                       <h3>'.$post_title.'</h3><br /><br />
                        <blockquote class="blockquote-reverse">
                        <footer>'.$user_name.'</footer>
                    </blockquote>
                        <h4>'.$post_description.'</h4>
                        
                                    
                        
                        
                    </div>
                    
                    ';
    }





?>

<head>
    
        <link type="text/css" rel="stylesheet" href="css/feed.css">
    
    </head>
    
    
    <body>
        

    
    </body>



</html>