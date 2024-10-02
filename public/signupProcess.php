<?php

use PhpParser\Node\Stmt\TryCatch;

use function Laravel\Prompts\alert;
use function PHPUnit\Framework\isEmpty;

session_start();
require "../public/Connection/connection.php";


$email = $_POST["email"];
$withinitialsName = $_POST["withinitialsName"];
$fullName = $_POST["fullName"];
$mobile = $_POST["mobile"];
$tel = $_POST["tel"];
$address = $_POST["address"];
$SchoolyearInput = $_POST["SchoolyearInput"];
$CadetyearInput = $_POST["CadetyearInput"];
$birthday = $_POST["birthday"];
$password = $_POST["password"];

$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";





// echo($email.$withinitialsName.$fullName.$mobile.$address.$SchoolyearInput.$CadetyearInput.$birthday.$password);

// validation 
if (empty($email)) {
    echo ("Please Enter Email First");
} else if (!preg_match($pattern, $email)) {
    echo ("Please Enter Valid Email Address");
} else if (empty($withinitialsName)) {
    echo ("Please Name With Initials");
} else if (empty($fullName)) {
    echo ("Please Enter Full Name ");
} else if (empty($mobile)) {
    echo ("Please Enter Mobile");
} else if (empty($tel)) {
    echo ("Please Enter Telephone Number");
} else if (empty($address)) {
    echo ("Please Enter Address");
} else if (empty($SchoolyearInput)) {
    echo ("Please Enter year of End the School");
} else if (empty($CadetyearInput)) {
    echo ("Please Enter Year of last Camping");
} else if (empty($birthday)) {
    echo ("Please Enter Your birth Day");
} else if (empty($password)) {
    echo ("Please Enter a Password Please");
} else {

    if (!empty($_FILES["file"])) {

        // Image Input
        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];

        $allowed_Image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

        if (in_array($ImageType, $allowed_Image_extentions)) {

            $NewImage_Extention;
            if ($ImageType == "image/jpg") {
                $NewImage_Extention = ".jpg";
            } else  if ($ImageType == "image/jpeg") {
                $NewImage_Extention = ".jpeg";
            } else  if ($ImageType == "image/png") {
                $NewImage_Extention = ".png";
            } else  if ($ImageType == "image/svg+xml") {
                $NewImage_Extention = ".svg";
            }

            $oldResult = Database::search("SELECT * FROM `user`  WHERE `email` = '" . $email . "' ");
            $oldResult_num = $oldResult->num_rows;

            if ($oldResult_num == 1) {
                echo ("User Already Registerd");
            } else {
                $newImageName = "..//public//images//user_images//user-" . $email . $NewImage_Extention;

                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("INSERT INTO `user`  (`email`,`with_initials_nae`,`full_name`,`address`,`Mobile`,`tel`,`school_out_year`,`school_last_cadet_year`,`birthday`,`password`,`imagepath`,`user_status_user_status_id`,`user_role_role_id`) 
                VALUES ('" . $email . "','" . $withinitialsName . "','" . $fullName . "','" . $address . "','" . $mobile . "','" . $tel . "','" . $SchoolyearInput . "','" . $CadetyearInput . "','" . $birthday . "','" . $password . "','" . $newImageName . "','3','2') ");
                echo ("Registration Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        // Only Text
        Database::iud("INSERT INTO `user`  (`email`,`with_initials_nae`,`full_name`,`address`,`Mobile`,`tel`,`school_out_year`,`school_last_cadet_year`,`birthday`,`password`,`user_status_user_status_id`,`user_role_role_id`) 
        VALUES ('" . $email . "','" . $withinitialsName . "','" . $fullName . "','" . $address . "','" . $mobile . "','" . $tel . "','" . $SchoolyearInput . "','" . $CadetyearInput . "','" . $birthday . "','" . $password . "','3','2') ");
        echo ("Registration Success");
    }
}
