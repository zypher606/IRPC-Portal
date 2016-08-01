<?php

require('conn.inc');

session_start();

if(!isset($_SESSION['admin'])){

echo 'You must be logged in to see this page.</br></br>';
    

echo "<a href='login_form.php'>Click here to Log in </a>";    
  
  
exit();    
    
}

?>