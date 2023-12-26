<?php

include_once 'models/Room.php';
include_once 'models/Invitation.php';

$Invitation = new  Invitation();
$Room = new  Room();

$myId = $_SESSION['id_user'];

$amis = $Invitation->getFriends($myId);

if(isset($_POST['addRoom']))
{
    $title = $_POST['title'];
    $created_by = $_SESSION['id_user'];
    $selectedUsers = isset($_POST['selected_users']) ? $_POST['selected_users'] : [];
    if ($Room->addRoom($title,$created_by, $selectedUsers)) 
    {
        header("location:index.php?page=page1");
    } else {
        header("location:index.php?page=add_room");
    }
    
}