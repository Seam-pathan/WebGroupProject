<?php
session_start();
require_once('../Modal/userModel.php');

if (isset($_POST['submit'])) {

    $current_password = $_POST['current_password'];
    $new_password     = $_POST['new_password'];
    $repass        = $_POST['re_type_password'];
    $id            = $_SESSION['user_id'];

    $user = getUserByID($id);

    $password_length = strlen($new_password);

    $word1 = "@";
    $word2 = "#";
    $word3 = "%";
    $word4 = "$";

    if ($current_password == "" || $new_password == "" || $repass == "") {
        echo " Information Required ";
    } elseif ($password_length < 8) {
        echo "password should be more than 8 words......";
    } elseif ($new_password != $repass) {
        echo "Password didn't match with confirm Password ";
    } elseif ($current_password != $user["Password"]) {
        echo "Invalid Current Password";
    } elseif (strpos($new_password, $word1) == false && strpos($new_password, $word2) == false && strpos($new_password, $word3) == false && strpos($new_password, $word4) == false) {
        echo "Password Should contain special cherecters";
    } else {

        $user = [
            'id'          => $id,
            'password'    => $new_password,
        ];

        //print_r($user);
        $status = updatePassword($user);

        if ($status) {

            setcookie("username", $username, time() + 3600, '/');
            setcookie("password", $password, time() + 3600, '/');

            header('location: ../Controller/logout.php');
        } else {
            echo "Db error";
        }
    }
}
