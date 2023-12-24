<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: location:index.php?page=login");
exit();
?>