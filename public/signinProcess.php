<?php
session_start();
require "../public/Connection/connection.php";

$email = $_POST["email"];
$password = $_POST["password"];

$user_rs =  Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "' ");
$user_num = $user_rs->num_rows;

if ($user_num == 1) {
    $_SESSION["user"] = $user_rs->fetch_assoc();
    echo ("succcess");
} else {
    echo ("Invalid User Details, Please try again later");
}
