<?php

$Room = new Room();
$id = $_GET['id'];
$room = $Room->getRoomById($id);

if(isset($_POST['quitterRoom']))
{
    $roomId = $_POST['roomId'];
    $myId = $_POST['myId'];

    if($Room->quitterRoom($roomId, $myId))
    {
        header("location:index.php?page=page1");
    }

}

