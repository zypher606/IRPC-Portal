<?php  

    require('conn.inc');

    $user_id=$_SESSION['logged_user'];
    $i=0;
    $flag1=0;
    $flag2=0;
    $flag3=0;
    $flag4=0;
    $flag5=0;
    $flag6=0;
    $flag7=0;
    $flag8=0;
    $flag9=0;
    $flag10=0;
    $flag11=0;
    $flag12=0;
    $flag13=0;
    $flag14=0;
    $flag15=0;
    $flag16=0;
    $flag17=0;
    $flag18=0;
    $flag19=0;
    $flag20=0;
    $flag21=0;
    $flag22=0;
    $flag23=0;
    $flag24=0;
    $flag25=0;
    $flag26=0;
    $flag27=0;

    $query=mysqli_query($conn,"SELECT * FROM user_info WHERE user_id=".$user_id) or die('Error Querying');
    while($row=mysqli_fetch_array($query)){
    	$first_name=$row['first_name'];
    	$last_name=$row['last_name'];
    	$user_email=$row['user_email'];
    	$category=$row['category'];
        $user_interests=$row['user_interests'];
    }
    $str=explode(', ',$user_interests);
	for($i=0;$i<=(count($str)-1);$i++){
		switch($str[$i]){
                
			case "Aerospace": $flag1=1;break;
			case "Agricultural": $flag2=1;break;
			case "Artificial": $flag3=1;break;
			case "Automotive": $flag4=1;break;
			case "Biomechanics": $flag5=1;break;
			case "Chemical": $flag6=1;break;
			case "Cognitive": $flag7=1;break;
			case "Computational": $flag8=1;break;
			case "CS": $flag9=1;break;
			case "CYBER": $flag10=1;break;
			case "Electrical": $flag11=1;break;
			case "Electronics": $flag12=1;break;
			case "Fire": $flag13=1;break;
			case "Geo_info": $flag14=1;break;
			case "Geo_sci": $flag15=1;break;
			case "Health": $flag16=1;break;
			case "Humanities": $flag17=1;break;
			case "Infrastructure": $flag18=1;break;
			case "Journalism": $flag19=1;break;
			case "Material": $flag20=1;break;
			case "Mechatronics": $flag21=1;break;
			case "Nuclear": $flag22=1;break;
			case "Petroleum": $flag23=1;break;
			case "Power": $flag24=1;break;
			case "Renewable": $flag25=1;break;
			case "Structural": $flag26=1;break;
			case "VLSI": $flag27=1;break;
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_SESSION['logged_user_f_name'].' '.$_SESSION['logged_user_l_name'] ?></title>
    <meta name="author" content="Shashank Bhoge">
<meta name="description" 
      content="Industry Relations and Project Council, is the newly formed student executive council at IIT Gandhinagar. The council deals with the student projects, their documentation and proress. The council also aims to establish industry liasions for the institute in order to fetch more projects. In the recent times, to fulfill its aim, the council organised Tech Leaps and is looking forward to organise Mechanical Engineering Industry Outreach Program.">    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.backgroundPosition.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
		
		  $('#midground').css({backgroundPosition: '0px 0px'});
		  $('#foreground').css({backgroundPosition: '0px 0px'});
		  $('#background').css({backgroundPosition: '0px 0px'});
		
			$('#midground').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 240000, 'linear');
			
			$('#foreground').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 120000, 'linear');
			
			$('#background').animate({
				backgroundPosition:"(-10000px -2000px)"
			}, 480000, 'linear');
			
		});
	</script>
    
    
</head>
    
<body>
    
     <div id="background"></div>
	<div id="midground"></div>
	<div id="foreground"></div>
    
    
<nav class="navbar navbar-default" id="mynav">
  <div class="container-fluid">
    <div class="navbar-header" id="icon">
      <a class="pull-left" href="index.php"><img src="img/logo.png" alt="IRPC" height="50px"></a>
    </div>
    
    <ul class="nav navbar-nav navbar-left" id="tabLinks">
		
		<li><a href="index.php"> &nbsp; &nbsp;Feed</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech Leaps <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://yashsingh2.wix.com/techleaps" target="_blank">Tech Leaps 1</a></li>
              <li class="divider"></li>
            <li><a href="techleaps.php">Tech Leaps 2</a></li>
          </ul>
        </li>
        <li><a  href="industry_outreach.php">Industry Outreach</a></li>
		<li><a  href="gallery.php">Gallery</a></li>
		<li><a  href="team.php">Team</a></li>
		
		
		
		
    </ul>
      
       <ul class="nav navbar-nav navbar-right" id="tabLinks">
          
<!--           <li><a href="logout.php"> <span class="glyphicon glyphicon-user"></span></a></li>-->
          
           <?php
           
           if($_SESSION['logged_user_cat']=='student') {
               
             echo '  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="feed_p.php">Participated</span></a></li>
            <li class="divider"></li>
            <li><a href="feed_w_p.php">Willing to participate</a></li>
            <li class="divider"></li>
            <li><a href="feed_nt.php">Not Interested</a></li>
            <li class="divider"></li>
            <li><a data-toggle="modal" href="#" data-target="#feedback">Feedback</a></li>
          </ul>
        </li> ' ;
               
           }
           
           else {
               
           echo '<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="feed_m.php">Mentored</span></a></li>
            <li class="divider"></li>
            <li><a href="feed_w_m.php">Willing to mentor</a></li>
            <li class="divider"></li>
            <li><a href="feed_nt.php">Not Interested</a></li>
            <li class="divider"></li>
            <li><a data-toggle="modal" href="#" data-target="#feedback">Feedback</a></li>
          </ul>
        </li> ';    
               
               
           
           }
                   
                   
                ?>
    
     <li><a data-toggle="modal" href="#" data-target="#profile"><span class="glyphicon glyphicon-cog"></span> </a></li>
           <li><a href="logout.php"> <span class="glyphicon glyphicon-off">&nbsp; </span></a></li>
    
        
               
      </ul>
      
      	
      
  </div>
</nav>

<div id="feedback" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Feedback</h4>
					</div>
					<div class="modal-body">
                        
                

                        <form method="post" action="feedback.php">
                            
                            <div class="form-group">
                              <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                            </div>
                                <input type="hidden" name="user_name" value="<?php echo $_SESSION['logged_user'];?>">
                            
                            <button type="submit" class="btn btn-default">Submit</button>
                            
                        </form>

						  
					</div>
				</div>

			</div>
		</div>    
  

    
    <div id="profile" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Interest Zones</h4>
					</div>
					<div class="modal-body">
                        
                

                        <form method="post" action="interest_add.php">
 
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Aerospace" <?php if($flag1==1) { echo "checked";} ?>> Aerospace
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Agricultural" <?php if($flag2==1) { echo "checked";}?>> Agricultural & Food Engineering
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Artificial" <?php if($flag3==1) { echo "checked";} ?>> Artificial Intelligence
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Automotive" <?php if($flag4==1) { echo "checked";} ?>> Automotive Design
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Biomechanics" <?php if($flag5==1) { echo "checked"; } ?>> Biomechanics ,Biosciences and Bioengineering
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Chemical" <?php if($flag6==1) { echo "checked"; } ?>> Chemical Engineering Process Design
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Cognitive" <?php if($flag7==1) { echo "checked"; } ?>> Cognitive science
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Computational" <?php if($flag8==1) { echo "checked"; } ?>> Computational Fluid Dynamics
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="CS" <?php if($flag9==1) { echo "checked"; } ?>> Computer Science with Specialization in Cloud Computing & Virtualization Technologies
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="CYBER" <?php if($flag10==1) { echo "checked"; } ?>> CYBER, SYSTEM AND NETWORK SECURITY AND FORENSICS
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Electrical" <?php if($flag11==1) { echo "checked"; } ?>> Electrical engineering.
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Electronics" <?php if($flag12==1) { echo "checked"; } ?>> Electronics & Instrumentation Engineering
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Fire" <?php if($flag13==1) { echo "checked"; } ?>> Fire & Safety Engineering
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Geo_info" <?php if($flag14==1) { echo "checked"; } ?>> Geo Informatics
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Geo_sci" <?php if($flag15==1) { echo "checked"; } ?>> Geo science
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Health" <?php if($flag16==1) { echo "checked"; } ?>> Health, safety and Environment
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Humanities" <?php if($flag17==1) { echo "checked"; } ?>> Humanities & Social Sciences
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Infrastructure" <?php if($flag18==1) { echo "checked"; } ?>> Infrastructure
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Journalism" <?php if($flag19==1) { echo "checked"; } ?>> Journalism
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Material" <?php if($flag20==1) { echo "checked"; } ?>> Material science
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Mechatronics" <?php if($flag21==1) { echo "checked"; } ?>> Mechatronics
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Nuclear" <?php if($flag22==1) { echo "checked"; } ?>> Nuclear Science and Technology
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Petroleum" <?php if($flag23==1) { echo "checked"; } ?>> Petroleum Engineering
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Power" <?php if($flag24==1) { echo "checked"; } ?>> Power System
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Renewable" <?php if($flag25==1) { echo "checked"; } ?>> Renewable Energy
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="Structural" <?php if($flag26==1) { echo "checked"; } ?>> Structural Engineering
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" name="check_list[]" value="VLSI" <?php if($flag27==1) { echo "checked"; } ?>> VLSI and Microelectronics
                            </label>
                          </div>
                            
                            
                             
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>

						  
					</div>
				</div>

			</div>
		</div>
	

</body>
</html>
