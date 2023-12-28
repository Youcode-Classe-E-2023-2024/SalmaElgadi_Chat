<?php
include_once 'models/Room.php';

$Room = new Room();
    $id = $_GET['room'];
    $messages = $Room->getMessages($id);

    
        echo json_encode(["messages" => $messages]);
    