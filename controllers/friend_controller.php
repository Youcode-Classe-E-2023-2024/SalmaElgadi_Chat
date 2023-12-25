<?php

include_once 'models/Invitation.php';

$Invitation = new  Invitation();

// $connectedUserId = $_SESSION['id_user'];

$invitations = $Invitation->getInvitation();
// var_dump($invitations);