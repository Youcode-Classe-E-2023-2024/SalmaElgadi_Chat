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

        $Room = new Room();
            if ($Room->sendMessage($myId, $roomId, $message)) 
            {
                echo json_encode(["success" => true]);
            } else 
            {
                echo json_encode(["success" => false]);
            }

        die();
    } else {
        $Room = new Room();
        $id = $_GET['id'];
        $messages = $Room->getMessages($id);

        foreach ($messages as $message) : ?>
            <div class="flex w-full mt-2 space-x-3 max-w-xs">
                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                <div>
                    <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
                    <p class="text-sm"><?= $message['text'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;
        die();
    }


