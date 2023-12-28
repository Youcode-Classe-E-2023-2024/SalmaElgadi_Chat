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

    public function getInvitation($myId)
    {
    global $db;
    $result = $db->query("SELECT * FROM users
                        INNER JOIN invitation ON users.id_user = invitation.id_sender
                        WHERE invitation.statut = '0' AND id_receiver = $myId;");
    return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function acceptInvitation($id_me, $id_user)
    {
        global $db;
        $stmtUpdateInvitation = $db->prepare("UPDATE invitation SET statut='1' WHERE id_receiver=? AND id_sender=?");
        $stmtUpdateInvitation->bind_param('ii', $id_me, $id_user);
        $resultUpdateInvitation = $stmtUpdateInvitation->execute();
        $stmtUpdateInvitation->close();

        if ($resultUpdateInvitation) {
            $stmtInsertFriend = $db->prepare("INSERT INTO friend (id_user1, id_user2) VALUES (?, ?)");
            $stmtInsertFriend->bind_param('ii', $id_user, $id_me);
            $resultInsertFriend = $stmtInsertFriend->execute();
            $stmtInsertFriend->close();
        }

        return $resultUpdateInvitation;
    }

    public function deleteInvitation($id_me, $id_user)
    {
       global $db;
       $stmt = $db->prepare("DELETE FROM invitation  WHERE id_receiver='$id_me' AND id_sender='$id_user'");
       $result = $stmt->execute();
       return $result;
    }   

    public function getFriends($myId)
    {
        global $db;

        $query = "SELECT * FROM users 
                WHERE id_user IN (
                    SELECT id_user1 FROM friend WHERE id_user2 = ?
                    UNION
                    SELECT id_user2 FROM friend WHERE id_user1 = ?
                )";

        $stmt = $db->prepare($query);
        $stmt->bind_param('ii', $myId, $myId);
        $stmt->execute();

        $result = $stmt->get_result();
        $friends = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $friends;
    }
    public function deleteFriend($id_me, $id_user)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM friend  WHERE id_user2='$id_me' AND id_user1='$id_user'");
        $results = $stmt->execute();
        return $results;
    }
}