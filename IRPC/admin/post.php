<?php
    
 
 
    require('includes/conn.inc');

    $post_id = $_GET['post_id'];

    $result2 = mysqli_query($conn, "SELECT * FROM post_user_details WHERE  post_id='$post_id'") ;

    if($result2){
        
            $row = mysqli_fetch_array($result2) ;
        
            echo "<h3>Add interest zones to this post</h3>";
            echo  "Title :". $post_title = $row['post_title']."<br />";
            echo "Description :".$post_description=$row["post_description"]."<br />";
            echo "Time :".$post_time=$row["post_time"]."<br />";  
            echo "<br />";
    }

 //Interest zones will be asigned by the admin  
//only for the posts added by the admin
//For the posts added bu user, the options will be : Like or collaborate
// Notify through the mail only when admin posts something(only for interest zones)
// Home . tech leaps . busiee saturdays . Past student industry projects > UL, Ricoh



    
    
    
    
    ?>

<html>
	<head>
		<title>Interests</title>
		
	</head>
	<body>
		<form method="post" action="interest_add.php">
			<input type="checkbox" name="check_list[]" value="Aerospace"><label>Aerospace</label><br />
			<input type="checkbox" name="check_list[]" value="Agricultural"><label>Agricultural & Food Engineering</label><br />
			<input type="checkbox" name="check_list[]" value="Artificial"><label>Artificial Intelligence</label><br />
			<input type="checkbox" name="check_list[]" value="Automotive"><label>Automotive Design</label><br />
			<input type="checkbox" name="check_list[]" value="Biomechanics"><label>Biomechanics ,Biosciences and Bioengineering</label><br />
			<input type="checkbox" name="check_list[]" value="Chemical"><label>Chemical Engineering Process Design</label><br />
			<input type="checkbox" name="check_list[]" value="Cognitive"><label>Cognitive science</label><br />
			<input type="checkbox" name="check_list[]" value="Computational"><label>Computational Fluid Dynamics</label><br />
			<input type="checkbox" name="check_list[]" value="CS"><label>Computer Science with Specialization in Cloud Computing & Virtualization Technologies</label><br />
			<input type="checkbox" name="check_list[]" value="CYBER"><label>CYBER, SYSTEM AND NETWORK SECURITY AND FORENSICS</label><br />
			<input type="checkbox" name="check_list[]" value="Electrical"><label>Electrical engineering</label><br />
			<input type="checkbox" name="check_list[]" value="Electronics"><label>Electronics & Instrumentation Engineering</label><br />
			<input type="checkbox" name="check_list[]" value="Fire"><label>Fire & Safety Engineering</label><br />
			<input type="checkbox" name="check_list[]" value="Geo_info"><label>Geo Informatics</label><br />
			<input type="checkbox" name="check_list[]" value="Geo_sci"><label>Geo science</label><br />
			<input type="checkbox" name="check_list[]" value="Health"><label>Health, safety and Environment</label><br />
			<input type="checkbox" name="check_list[]" value="Humanities"><label>Humanities & Social Sciences</label><br />
			<input type="checkbox" name="check_list[]" value="Infrastructur"><label>Infrastructure</label><br />
			<input type="checkbox" name="check_list[]" value="Journalism"><label>Journalism</label><br />
			<input type="checkbox" name="check_list[]" value="Material"><label>Material science</label><br />
			<input type="checkbox" name="check_list[]" value="Mechatronics"><label>Mechatronics</label><br />
			<input type="checkbox" name="check_list[]" value="Nuclear"><label>Nuclear Science and Technology</label><br />
			<input type="checkbox" name="check_list[]" value="Petroleum"><label>Petroleum Engineering</label><br />
			<input type="checkbox" name="check_list[]" value="Power"><label>Power System</label><br />
			<input type="checkbox" name="check_list[]" value="Renewable"><label>Renewable Energy</label><br />
			<input type="checkbox" name="check_list[]" value="Structural"><label>Structural Engineering</label><br />
			<input type="checkbox" name="check_list[]" value="VLSI"><label>VLSI and Microelectronics</label><br />
			<input type="hidden" name="post_id" value="<?php echo $post_id;?> ">
			<input type="submit" value="Approve">
		</form>
	</body>
</html>