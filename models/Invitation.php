<?php

class Invitation
{
    public $id_user;

    public function __construct()
    {
        global $db;
    }
    public function send_invitation($id_me, $id_user)
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO invitation (id_user1, id_user2) VALUES ('$id_me','$id_user')");
        $result = $stmt->execute();
        return $result;
    }

    public function getInvitation($connectedUserId)
    {
        global $db;
        $result = $db->query("SELECT * FROM users WHERE id_user IN (SELECT id_user1 FROM invitation WHERE id_user2 = '$connectedUserId' AND statut='0')");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function delete_invitation($id_me, $id_user)
    {
        
    }

}