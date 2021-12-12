<?php
require_once('../Modal/News.php');
session_start();
if (isset($_POST["submit"])) {


    $comment = $_POST["comment"];
    $news_id = $_GET["id"];
    $username = $_SESSION['username'];


    if ($comment != " ") {
        $status = postComment($news_id, $comment, $username);
    } else {
        echo "Please Write a Comment ";
    }

    if ($status) {
        header('location: ../View/Uhomepage.php');
    } else {
        echo "Db error";
    }
}
