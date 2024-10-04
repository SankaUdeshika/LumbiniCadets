<?php
session_start();
$user_session = $_SESSION["user"];

use Illuminate\Support\Facades\Date;

require "../public/Connection/connection.php";

$amount = $_POST["PaymentAmount"];
$description = $_POST["description"];

if (empty($amount)) {
    echo ("Please Enter a Amount");
} else if (empty($description)) {
    echo ("Please Enter a Description");
} else {
    date_default_timezone_set('Asia/Colombo');
    $date =  date("Y-m-d");
    $time =  date("H:i:s");


    Database::iud("INSERT INTO `payments` (`user_email`,`amount`,`payment_date`,`payment_time`,`Descriptions`) VALUES ('" . $user_session["email"] . "','" . $amount . "','" . $date . "','" . $time . "','" . $description . "') ");

    echo ("Payment Success");
}
