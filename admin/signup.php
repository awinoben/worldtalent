<?php

if ((isset($_POST['title'])) && (isset($_POST['firstName'])) && (isset($_POST['middleName'])) && (isset($_POST['lastName'])) && (isset($_POST['username'])) && (isset($_POST['email'])) && (isset($_POST['phone'])) && (isset($_POST['role']))) {
    // get the details of the new user  to register
    $role = $_POST['role'];
    $token = $_POST['token'];
    $title = $_POST['title'];
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $response = array();

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $userQuery = "SELECT * FROM `users` WHERE `email`='$email'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0 && $token=='1234') {
        // user (reg_no) does not exist
        //Hash the password
//        $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
        $passwordHash = md5($password);
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `users`(`userTitle`,`firstName`, `middleName`,`lastName`,`username`,`email`,`phone`,`password`,`role`) 
		                  VALUES ('$title','$fname','$mname','$lname','$username','$email','$phone','$passwordHash','$role')";
        try {
            $db->query($registerQuery);

            echo "You registered successfully!!";  // successful
            //redirect to registration page
            header('location:login.php');

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