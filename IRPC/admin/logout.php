<?php

    session_start();

    if(isset($_SESSION['logged_user'])){

        session_unset();
        session_destroy();

        header("Location: login_form.php");
    }

    else { 
        header("Location: login_form.php");
    }


    

?>