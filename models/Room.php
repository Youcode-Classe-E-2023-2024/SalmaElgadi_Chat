<?php

class Room
{
    public function __construct()
    {
        
    }
    
    public function addRoom($title, $created_by, $selectedUsers)
    {
        global $db;

        $db->begin_transaction();

        $stmt1 = $db->prepare("INSERT INTO rooms (title, created_by) VALUES (?, ?)");
        $stmt1->bind_param("si", $title, $created_by);

        if (!$stmt1->execute()) {
            $db->rollback();
            return false;
        }

        $roomId = $db->insert_id;

        $stmt1->close();

        foreach ($selectedUsers as $userId) {
            $stmt2 = $db->prepare("INSERT INTO room (id_r, id_u) VALUES (?, ?)");
            $stmt2->bind_param("ii", $roomId, $userId);

            if (!$stmt2->execute()) {
                $db->rollback();
                return false;
            }

            $stmt2->close();
        }

        $db->commit();
        return true;
    }

    public function getRooms($myId)
    {
        global $db;
        $stmt = $db->prepare("SELECT rooms.*, COUNT(room.id_u) AS member_count
                                FROM rooms
                                LEFT JOIN room ON rooms.id_room = room.id_r
                                WHERE id_room IN (SELECT id_r FROM room WHERE id_u = ?)
                                GROUP BY rooms.id_room");
        $stmt->bind_param("i", $myId);
        $stmt->execute();
        $result = $stmt->get_result();
        $rooms = $result->fetch_all(MYSQLI_ASSOC);
        return $rooms;
    }

    public function getRoomById($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT * FROM rooms WHERE id_room =?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $rooms = $result->fetch_all(MYSQLI_ASSOC);
        return $rooms;
    }


}