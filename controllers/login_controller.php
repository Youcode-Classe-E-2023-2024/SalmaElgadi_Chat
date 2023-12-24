<?php

include_once '_classes/User.php';

$users = new  User();

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userInfo = $users->login($email, $password);
    

    if ($userInfo) {
        session_start();

        $_SESSION['id_user'] = $userInfo['id_user'];
        $_SESSION['username'] = $userInfo['username'];
    
        echo "login";
        header("location:index.php?page=page1");
        exit();
    } else {
        echo "not log";
        // header("Location: ../../view/User/connect.php?STATUS=probleme_de_connexion");
        exit();
    }
}
?>
