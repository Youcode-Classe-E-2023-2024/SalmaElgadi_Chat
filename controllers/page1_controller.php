<?php

if (isset($_POST['logout'])) 
{
    // echo'hh';
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location:index.php?page=login");
    exit();
   
}
