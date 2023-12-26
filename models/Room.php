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

}