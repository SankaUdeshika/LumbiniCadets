<?php
session_start();
require "../public/Connection/connection.php";

if (isset($_SESSION["user"])) {
    $user_session = $_SESSION["user"];

    $withinitialsName = $_POST["withinitialsName"];
    $fullName = $_POST["fullName"];
    $mobile = $_POST["mobile"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
    $SchoolyearInput = $_POST["SchoolyearInput"];
    $CadetyearInput = $_POST["CadetyearInput"];
    $birthday = $_POST["birthday"];

    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";


    // echo($email.$withinitialsName.$fullName.$mobile.$address.$SchoolyearInput.$CadetyearInput.$birthday.$password);

    // validation 
    if (empty($withinitialsName)) {
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

                $oldResult = Database::search("SELECT * FROM `user`  WHERE `email` = '" . $user_session["email"] . "' ");
                $oldResult_num = $oldResult->num_rows;
                $oldResult_date = $oldResult->fetch_assoc();

                if ($oldResult_date["imagepath"] == "") {
                    $newImageName = "..//public//images//user_images//user-" . $user_session["email"] . $NewImage_Extention;

                    // Move the uploaded file
                    move_uploaded_file($ImageFile["tmp_name"], $newImageName);

                    // Update the user record in the database
                    Database::iud("UPDATE `user` SET 
                        `with_initials_nae` = '" . $withinitialsName . "', 
                        `full_name` = '" . $fullName . "',
                        `address` = '" . $address . "',
                        `Mobile` = '" . $mobile . "',
                        `tel` = '" . $tel . "',
                        `school_out_year` = '" . $SchoolyearInput . "',
                        `school_last_cadet_year` = '" . $CadetyearInput . "',
                        `birthday` = '" . $birthday . "',
                        `imagepath` = '" . $newImageName . "' 
                        WHERE `email` = '" . $user_session["email"] . "'");

                    echo ("Update Success");
                } else {
                    $newImageName = "..//public//images//user_images//user-" . $user_session["email"] . $NewImage_Extention;

                    unlink($oldResult_date["imagepath"]);
                    // Move the uploaded file
                    move_uploaded_file($ImageFile["tmp_name"], $newImageName);

                    // Update the user record in the database
                    Database::iud("UPDATE `user` SET 
                       `with_initials_nae` = '" . $withinitialsName . "', 
                       `full_name` = '" . $fullName . "',
                       `address` = '" . $address . "',
                       `Mobile` = '" . $mobile . "',
                       `tel` = '" . $tel . "',
                       `school_out_year` = '" . $SchoolyearInput . "',
                       `school_last_cadet_year` = '" . $CadetyearInput . "',
                       `birthday` = '" . $birthday . "',
                       `imagepath` = '" . $newImageName . "' 
                       WHERE `email` = '" . $user_session["email"] . "'");

                    echo ("Update Success");
                }
            } else {
                echo ("Please Select Valid Image Extention");
            }
        } else {
            // Only Text
            Database::iud("UPDATE `user` SET `with_initials_nae` = '" . $withinitialsName . "', `full_name` = '" . $fullName . "',`address` = '" . $address . "',`Mobile` = '" . $mobile . "',`tel` = '" . $tel . "',`school_out_year` = '" . $SchoolyearInput . "',`school_last_cadet_year` = '" . $CadetyearInput . "',`birthday` = '" . $birthday . "' WHERE `email` = '" . $user_session["email"] . "' ");
            echo ("Update Success");
        }
    }
} else {
    echo ("Something Wrong, Please Try again later");
}
