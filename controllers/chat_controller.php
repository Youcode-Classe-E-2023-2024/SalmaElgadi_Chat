<?php

include_once 'models/Room.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $inputJSON = file_get_contents('php://input');

    // Decode the JSON data
    $data = json_decode($inputJSON, true);
    $data = [
        "message" => $data['message'],
        "roomId"=>$_SESSION['id_user'],
    ];
    // if ($Room->sendMessage($myId, $id, $message)) {
        echo json_encode(["data" => $data]);
        
    // } else {
        // echo json_encode(["message" => false]);
    // }
    die();
} else {
    
$Room = new Room();

$id = $_GET['id'];

$rooms = $Room->getRoomById($id);
$messages = $Room->getMessages($id);
}