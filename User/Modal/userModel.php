<?php

require_once('../Modal/db.php'); //require 

function validateUser($username, $password) //login
{
	$conn = getConnection();
	$sql = "select * from user where username='{$username}' and Password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result); //associative array   
	if ($row != NULL) {
		return true;
	} else {
		return false;
	}
}

function insertUser($user) //registration
{
	$conn = getConnection();
	$sql = "insert into user values('','{$user['name']}','{$user['username']}','{$user['email']}','{$user['password']}','{$user['role']}' )";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function getUserByID($id)
{

	$conn = getConnection();
	$sql = "select * from user where id= '{$id}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getUserByUser_name($username)
{
	$conn = getConnection();
	$sql = "select * from user where username= '{$username}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}



function updateUser($users)
{
	$conn = getConnection();

	$sql = "update user set Name='{$users['name']}', username='{$users['username']}', Email='{$users['email']}' where id={$users['id']}";
	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}
function updatePassword($password)
{
	$conn = getConnection();
	$sql = "update user set Password='{$password['password']}' where id={$password['id']}";
	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}


