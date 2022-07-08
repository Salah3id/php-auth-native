<?php
    session_start();
    include_once("framework/sitefunctions.php");
    
    
    
    if(isset($_SESSION['log']))
    {
        //logged in   
        session_destroy();
        redirect(0,'index.php');
    }
    else
    {
       redirect(0,'login.php');
    }
    
?>