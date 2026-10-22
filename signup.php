<?php

include "connection.php";

$userName = $_POST["username"];
$userEmail = $_POST["email"];
$userPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

$statement = $connection->prepare("INSERT INTO tiktok (user_name, user_email, user_password) VALUES (?, ?, ?)");

$statement->execute([$userName, $userEmail, $userPassword]);

session_start();

$_SESSION["user"] = $userName;

header("Location: index.php");