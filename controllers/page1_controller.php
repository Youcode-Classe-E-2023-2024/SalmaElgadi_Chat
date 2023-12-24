<?php
echo"hhcontro";
if (isset($_POST['logout'])) {
    echo 'Is logout';
    session_start();

$_SESSION = array();

session_destroy();

header("Location:index.php?page=login");
exit();
   
}
