<?php
include_once 'models/Room.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
    // Récupérer les données JSON envoyées depuis le client
    $inputJSON = file_get_contents('php://input');
    $data = json_decode($inputJSON, true);

    $roomId = $data['roomId'];
    $message = $data['message'];
    $myId = $_SESSION['id_user'];

    // Ajouter le message à la base de données
    $Room = new Room();
    if ($Room->sendMessage($myId, $roomId, $message)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
    die();
    }
    else{ 
        $Room = new Room();
    $id = $_GET['id'];
    $messages = $Room->getMessages($id);
    echo json_encode(["messages" => $messages]);
    $rooms = $Room->getRoomById($id);
    }