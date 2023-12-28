<?php

$Room = new Room();
$id = $_GET['id'];
$room = $Room->getRoomById($id);

