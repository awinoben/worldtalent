<?php
require_once "connect/dbconn.php";  // connect to database

if ((isset($_POST['firstName'])) && (isset($_POST['middleName'])) && (isset($_POST['lastName'])) && (isset($_POST['username'])) && (isset($_POST['dob'])) && (isset($_POST['gender'])) && (isset($_POST['email'])) && (isset($_POST['phone'])) && (isset($_POST['clinicManager'])) && (isset($_POST['age']))) {
    // get the details of the new user  to register
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $manager = $_POST['clinicManager'];
    $password = $_POST['password'];
    $importance = $_POST['importance'];
    //$profile = $_POST['profile'];
    $video = $_POST['video'];
    $status = "0";
    $imgfile=$_FILES["photo"]["name"];
    $resume=$_FILES["resume"]["name"];

// get the resume and image extension
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    $extresume = substr($resume,strlen($resume)-4,strlen($resume));
// allowed extensions
    $allowed_doc = array("doc","DOC","docx","DOCX","pdf","PDF");
    $allowed_extensions = array(".jpg",".JPG",".JPEG",".jpeg",".PNG",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(($fname=="") || ($lname=="") || ($dob=="") || ($age=="") || ($email=="") || ($country=="") || ($region=="") || ($region==""))
    {
        echo "<script>alert('Some important fields are missing. Please fill all the required fields');</script>";
    }
    else {
        //rename the image file
        $imgnewfile=md5($imgfile).$extension;
        $resumedoc=md5($resume).$extresume;
// Code for move image and document into directory
        move_uploaded_file($_FILES["photo"]["tmp_name"],"admin/candidatephotos/".$imgnewfile);
        move_uploaded_file($_FILES["resume"]["tmp_name"],"admin/resumes/".$resumedoc);


        // check if user(reg_no) exists
        $userQuery = "SELECT * FROM `candidates` WHERE `email`='$email'";
        $userResult = $db->query($userQuery);
        $userCount = $userResult->rowCount();

        if ($userCount == 0) {
            // user (reg_no) does not exist
            // add user
            //Hash the password
            $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
            // execute registration query(insert)
            $registerQuery = "INSERT INTO `candidates`(`firstName`, `middleName`,`lastName`,`username`,`dob`,`age`,`gender`,`email`,`phone`,`country`,`region`,`clinicManager`,`password`,`photo`,`resume`,`assessImportance`,`video`,`status`) 
	         VALUES ('$fname','$mname','$lname','$username','$dob','$age','$gender','$email','$phone','$country','$region','$manager','$passwordHash','$imgnewfile','$resumedoc','$importance','$video','$status')";
            try {
                $db->query($registerQuery);

                echo "candidate registered successfully!!";  // successful
                //redirect to registration page
                header('location:home.php');

            } catch (PDOException $exception) {
                //echo $exception->getMessage();
                echo "problem encountered during registration";     // failed
            }
        } else {
            // user already exists
            // registration is unnecesary
            // do nothing
            echo "candidate exists";
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}