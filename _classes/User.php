<?php

class User
{
    public $id;
    public $email;
    public $username;
    private $password;

    public function __construct($id)
    {
        global $db;

        $result = $db->query("SELECT * FROM users WHERE id_user = '$id'");
        $user = $result->fetch_assoc();

        $this->id = $user['id_user'];
        $this->email = $user['username'];
        $this->username = $user['email'];
        $this->password = $user['password'];
        $this->photo = $user['photo'];
    }

    static function getAll()
    {
        global $db;
        $result = $db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function edit()
    {
        global $db;
        return $db->query("UPDATE users SET users_email = '$this->email', users_username = '$this->username' WHERE users_id = '$this->id'");
    }

    public function setPassword($pwd)
    {
        $this->password = password_hash($pwd, PASSWORD_DEFAULT);
    }
}