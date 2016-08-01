<?php

    include("includes/auth.inc");
    include("includes/nav.php");
    


    $user_id = $_SESSION['logged_user'] ;

    $result23 = mysqli_query($conn, "SELECT * FROM user_info WHERE  user_id='$user_id'") ;
    
        
        while ($row = mysqli_fetch_array($result23)) {
            
            $user_interests = $row["user_interests"];
    
        }
        
        if(!empty($user_interests)) {



$result2 = mysqli_query($conn, "SELECT * FROM post_admin_details WHERE  user_id!='$user_id'") ;



    if($result2){
        
        
        while ($row = mysqli_fetch_array($result2)) {
            
            $post_genre=$row["post_genre"];
            $genre = explode(',', $post_genre);
            $max_genre = sizeof($genre);
            $post_title = $row["post_title"];
            $post_id = $row['post_id'];
            $post_time=$row["post_time"];
            $post_user = $row['user_name'];
            
            if ($_SESSION['logged_user_cat'] == 'student') {
                
            $result_p = mysqli_query($conn, "SELECT * FROM post_participate WHERE  user_id='$user_id' and post_id='$post_id'") ;
                
            $result_w_p = mysqli_query($conn, "SELECT * FROM post_w_participate WHERE  user_id='$user_id' and post_id='$post_id'") ;
                
            $result_nt = mysqli_query($conn, "SELECT * FROM post_not_interested WHERE  user_id='$user_id' and post_id='$post_id'") ;
                
            $add =   $result_p->num_rows + $result_w_p->num_rows + $result_nt->num_rows;
                     
            }
            
            else {
                
            $result_m = mysqli_query($conn, "SELECT * FROM post_mentor WHERE  user_id='$user_id' and post_id='$post_id'") ;
            
            $result_w_m = mysqli_query($conn, "SELECT * FROM post_w_assist WHERE  user_id='$user_id' and post_id='$post_id'") ;
            
            $result_nt = mysqli_query($conn, "SELECT * FROM post_not_interested WHERE  user_id='$user_id' and post_id='$post_id'") ;
                
            $add =   $result_m->num_rows + $result_w_m->num_rows + $result_nt->num_rows;    
                
            }
            
            
            
            for ($i=0; $i<$max_genre; $i++){
            
            $result = mysqli_query($conn, "SELECT * FROM user_info WHERE  user_id='$user_id' AND (user_interests LIKE '%".$genre[$i]."%')") ;
            
            $row_cnt = $result->num_rows;
                
            

            
            if($row_cnt!=0 && $add==0){
                
            

            
                echo '
                
                        <div id="post">
    
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="post.php?post_id='.$post_id.'"><h3>'.$post_title.'</h3></a>
                    </div>
    
                    
                    
                    <blockquote class="blockquote-reverse">
                        <footer>'.$post_user.'</footer>
                    </blockquote>
                    
                </div>
               
        </div> 
                
                
                
                
                ';
                
                break;
                
            }
                
    
            }
        }
        
   
    }
            
        }
        
        else {
            
            echo "<h3>Add interest zones to your profile by clicking on the icon on top-right of the screen</h3>";
        }




?>

<html>

    <head>
    
        <link type="text/css" rel="stylesheet" href="css/feed.css">
    
    </head>
    
    
    <body>
        
        
        <div id="addpostdiv">
			<a data-toggle="modal" data-target="#myModal" href="#" id="addPost"><img src="img/add.png" /></a>
		</div>
		
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add Feed</h4>
					</div>
					<div class="modal-body">
                        
                        <form method="post" action="add_post.php">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="post_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descripction">Description:</label>
                                <textarea name="post_description" class="form-control" rows="5" id="comment"></textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
						  
					</div>
				</div>

			</div>
		</div>
     
        
        
       
        
        
        
    
    
    
    </body>



</html>