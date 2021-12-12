<?php
session_start();
require_once('../Modal/userModel.php');

if (isset($_POST['submit'])) {

    $username     = $_POST['username'];
    $name         = $_POST['name'];
    $email         = $_POST['email'];
    $id            = $_SESSION['user_id'];

    $user_name_length = strlen($username);

    if ($name == "" || $email == "" || $username == "") {
        echo " Information Required ";
    } elseif (strpos($email, "@") == false) {
        echo "Put valid Email";
    } elseif ($user_name_length < 3) {
        echo "username should be more than 2 words and password should be more than 8 words......";
    } else {

        $user = [
            'id'        => $id,
            'name'      => $name,
            'username'    => $username,
            'email'        => $email
        ];

        // print_r($user);
        $status = updateUser($user);

        if ($status) {

            setcookie("username", $username, time() + 3600, '/');
            setcookie("password", $password, time() + 3600, '/');

            header('location: ../Controller/logout.php');
        } else {
            echo "Db error";
        }
    }
}
