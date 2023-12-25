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
        $stmt = $db->prepare("INSERT INTO invitation (id_sender, id_receiver) VALUES ('$id_me','$id_user')");
        $result = $stmt->execute();
        return $result;
    }

    public function getInvitation()
    {
        global $db;
        $result = $db->query("SELECT * FROM users WHERE id_user IN (SELECT id_sender FROM invitation WHERE statut='0')");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function acceptInvitation($id_me, $id_user)
    {
        global $db;
        $stmt = $db->prepare("UPDATE invitation SET statut='1' WHERE id_receiver='$id_me' AND id_sender='$id_user'");
        $result = $stmt->execute();
        return $result;
    }

    public function deleteInvitation($id_me, $id_user)
    {
       global $db;
       $stmt = $db->prepare("DELETE FROM invitation  WHERE id_receiver='$id_me' AND id_sender='$id_user'");
       $result = $stmt->execute();
       return $result;
    }

    public function getFriends()
    {
        global $db;
        $result = $db->query("SELECT * FROM users WHERE id_user IN (SELECT id_sender FROM invitation WHERE statut='1')");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}