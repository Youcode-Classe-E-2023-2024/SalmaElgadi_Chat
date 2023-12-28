<?php

include_once 'models/Invitation.php';

$Invitation = new  Invitation();

// $connectedUserId = $_SESSION['id_user'];
$myId = $_SESSION['id_user'];

$invitations = $Invitation->getInvitation($myId);
// var_dump($invitations);

if(isset($_POST['accept']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    if($Invitation->acceptInvitation($id_me, $id_user)){
        $Invitation->deleteInvitation($id_me, $id_user);
    }

}
if(isset($_POST['decline']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    $Invitation->deleteInvitation($id_me, $id_user);

}
if(isset($_POST['supprimer']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    if($Invitation->deleteFriend($id_me, $id_user)){
        // echo'hhh';
    }
else{
    echo 'hhhaaaaaaaaaa';
}

}

if(isset($_POST['blocker']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    $Invitation->blockFriend($id_me, $id_user);
}


// $myId = SESSION['id_user'];
$amis = $Invitation->getFriends($myId);
// var_dump($amis);