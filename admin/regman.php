<?php

if ((isset($_POST['title'])) && (isset($_POST['firstName'])) && (isset($_POST['middleName'])) && (isset($_POST['lastName'])) && (isset($_POST['username'])) && (isset($_POST['dob'])) && (isset($_POST['gender'])) && (isset($_POST['email'])) && (isset($_POST['phone'])) && (isset($_POST['role']))) {
    // get the details of the new user  to register
    $role = $_POST['role'];
    $expert_level = $_POST['expert_level'];
    $title = $_POST['title'];
    $license = $_POST['license'];
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
    $password = $_POST['password'];

    $response = array();

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $userQuery = "SELECT * FROM `users` WHERE `email`='$email'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        // user (reg_no) does not exist
        //Hash the password
//        $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
        $passwordHash = md5($password);
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `users`(`userTitle`,`firstName`, `middleName`,`lastName`,`username`,`dob`,`age`,`gender`,`email`,`phone`,`country`,`region`,`password`,`role`,`expert_level`,`license_number`) 
		                  VALUES ('$title','$fname','$mname','$lname','$username','$dob','$age','$gender','$email','$phone','$country','$region','$passwordHash','$role','$expert_level','$license')";
        try {
            $db->query($registerQuery);

            echo "manager registered successfully!!";  // successful
            //redirect to registration page
            header('location:regManager.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during registration";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "user exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}