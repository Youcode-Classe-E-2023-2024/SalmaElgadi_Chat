<?php

include_once 'models/Invitation.php';

$Invitation = new  Invitation();

$connectedUserId = $_SESSION['id_user'];

$invitations = $Invitation->getInvitation($connectedUserId);
var_dump($invitations);