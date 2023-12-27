<?php
include_once 'models/Room.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données JSON envoyées depuis le client
    $inputJSON = file_get_contents('php://input');
    $data = json_decode($inputJSON, true);

    // Récupérer les données nécessaires
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

    // Terminer le script
    die();
} else {
    // Si la requête n'est pas une requête POST, traiter les autres cas
    $Room = new Room();
    $id = $_GET['id'];
    $rooms = $Room->getRoomById($id);
    $messages = $Room->getMessages($id);

    // Ne renvoyer le JSON que si vous n'êtes pas en train de traiter une requête POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(["success" => true, "messages" => $messages]);
    }
}
