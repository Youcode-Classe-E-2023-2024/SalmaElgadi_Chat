<?php

include_once 'models/User.php';
include_once 'models/Invitation.php';

$User = new  User();
$Invitation = new  Invitation();

$myId = $_SESSION['id_user'];

$users = $User->getAllUsers($myId);

if(isset($_POST['addfriend']))
{
    $id_me = $_POST['myid'];
    $id_user = $_POST['friendid'];
    // $Invitation->send_invitation($id_me, $id_user);
    if($Invitation->send_invitation($id_me, $id_user))
    {
        echo'wee';
    }
    else{
        echo 'laaa';
    }

}
