<?php

include_once 'models/Room.php';

$Room = new  Room();

$id = $_GET['id'];

$rooms = $Room->getRoomById($id);