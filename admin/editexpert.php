<?php

if ((isset($_POST['firstName'])) && (isset($_POST['lastName'])) && (isset($_POST['email'])) && (isset($_POST['phone'])) ) {
    // get the details of the new user  to register
    $id = $_POST['userID'];
    $role = $_POST['role'];
    $expert_level = $_POST['expert_level'];
    $title = $_POST['title'];
    $license = $_POST['license'];
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    //$username = $_POST['username'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    //$password = $_POST['password'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $userQuery = "SELECT * FROM `users` WHERE `email`='$email' AND `userID`='$id'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount > 0) {
        // user (reg_no) does not exist
        // add user
        //Hash the password
        //$passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
        // execute registration query(insert)
        $registerQuery = "UPDATE `users` SET userTitle=?,role=?,firstName=?, middleName=?,lastName=?,dob=?,age=?,gender=?,email=?,phone=?,country=?,region=?,expert_level=?,license_number=? WHERE userID=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($title,$role,$fname,$mname,$lname,$dob,$age,$gender,$email,$phone,$country,$region,$expert_level,$license));


            echo "Expert updated successfully!!";  // successful
            //redirect to registration page
            header('location:viewExperts.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during update";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "User doesnt exist";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}