<?php

include_once 'models/User.php';

$User = new  User();

$users = $User->getAllUsers();

if(isset($_POST['addfriend']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    
}
else
{

}