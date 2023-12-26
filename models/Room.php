<?php

class Room
{
    public function __construct()
    {
        global $db;
    }
    
    public function addRoom($title,$created_by, $selectedUsers)
    {
        {
            $this->db->begin_transaction();
    
            $stmt1 = $db->prepare("INSERT INTO ticket (title, created_by) VALUES (?, ?)");
            $stmt1->bind_param("si", $title, $created_by);
    
            if (!$stmt1->execute()) {
                $this->db->rollback();
                return false;
            }
    
            $ticketId = $this->db->insert_id;
    
    
            foreach ($selectedUsers as $userId) {
                $stmt2 = $this->db->prepare("INSERT INTO room (id_r, id_u) VALUES (?, ?)");
                $stmt2->bind_param("ii", $ticketId, $userId);
    
                if (!$stmt2->execute()) {
                    $this->db->rollback();
                    return false;
                }
    
            }
            return true;
        }
    
    }

}