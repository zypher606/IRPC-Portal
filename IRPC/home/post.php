<?php

    include('includes/auth.inc');
    include("includes/nav.php");

    $category=$_SESSION['logged_user_cat'];

    $post_id = $_GET['post_id'];

    $result2 = mysqli_query($conn, "SELECT * FROM post_admin_details WHERE  post_id='$post_id'") ;

    $result3 = mysqli_query($conn, "SELECT * FROM post_participate WHERE  post_id='$post_id'") ;
    
    $result4 = mysqli_query($conn, "SELECT * FROM post_w_participate WHERE  post_id='$post_id'") ;

    $participated = '';

    $willing = '';

    while($row=mysqli_fetch_array($result3)){
    	   $participated .= $row['user_name'].'<br />';
    }

    while($row=mysqli_fetch_array($result4)){
    	   $willing .= $row['user_name'].'<br />';
    }


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
                    
                    <div class="panel-footer">
                    
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#part" aria-expanded="false" aria-controls="collapseExample">
    Users Participated
</button>
                        
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#w_part" aria-expanded="false" aria-controls="collapseExample">
    Users Willing To Participate
</button>
                        
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#options" aria-expanded="false" aria-controls="collapseExample">
    Options
</button>
                        
                        <div id="part" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Users Participatedr</h4>
      </div>
      <div class="modal-body">
        '.$participated.'
      </div>
    </div>

  </div>
</div>
                        
                        <div id="w_part" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Users Willing To Participate</h4>
      </div>
      <div class="modal-body">
        '.$willing.'
      </div>
    </div>

  </div>
</div>
                        
                        <div id="options" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Options</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="participate_db.php">';
    }



    if ($category == 'student') {
        
        echo '
        
        <div class="checkbox">
    <label>
      <input type="radio" name="same" value="participate"> Will participate
    </label>
      <label>
      <input type="radio" name="same" value="willing_part"> Willing to participate
    </label>
      <label>
      <input type="radio" name="same" value="not"> Not interested
    </label>
  </div>
      <input type="hidden" name="post_id" value="'.$post_id.'">
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
                    </div>
    
 
                    
                </div>

               
        </div> ';
        
    }

    else {
        
        echo '
        
        
        
        <div class="checkbox">
    <label>
      <input type="radio" name="same" value="mentor"> Will Mentor
    </label>
      <label>
      <input type="radio" name="same" value="willing_assist"> Willing To Mentor
    </label>
      <label>
      <input type="radio" name="same" value="not"> Not interested
    </label>
  </div>
      <input type="hidden" name="post_id" value="'.$post_id.'">
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
    </div>

  </div>
</div>
                    
                        
                     
                    </div>
    
 
                    
                </div>

               
        </div> ';
        
    }


?>

<head>
    
        <link type="text/css" rel="stylesheet" href="css/feed.css">
    
    </head>
    
    
    <body>
        
       
    
    
    </body>



</html>