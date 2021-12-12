<?php

require_once('../Modal/db.php');


function getNews()
{
    $conn = getConnection();
    $sql = "SELECT id as news_id,Title,Description,Author FROM news ";
    $result = mysqli_query($conn, $sql);
    $news = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($news, $row);
    }

    return $news;
}


function postComment($id, $comment, $username)
{
    $conn = getConnection();
    $sql = "insert into comments values('','{$username}','{$comment}','{$id}' )";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
function getComment($id)
{

    $conn = getConnection();
    $sql = "select * from comments where News_id= '{$id}' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
