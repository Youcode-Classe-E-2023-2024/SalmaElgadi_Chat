<?php

include_once 'models/Invitation.php';

$Invitation = new  Invitation();

// $connectedUserId = $_SESSION['id_user'];

$invitations = $Invitation->getInvitation();
// var_dump($invitations);

if(isset($_POST['accept']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    $Invitation->acceptInvitation($id_me, $id_user);

}
if(isset($_POST['decline']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    $Invitation->deleteInvitation($id_me, $id_user);

}

// $myId = SESSION['id_user'];
$amis = $Invitation->getFriends();
// var_dump($amis);