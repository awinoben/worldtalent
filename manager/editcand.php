<?php

if ((isset($_POST['firstName'])) && (isset($_POST['lastName'])) && (isset($_POST['email'])) && (isset($_POST['phone'])) ) {
    // get the details of the new user  to register
    $id = $_POST['candidateID'];
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
    $profile = $_POST['profile'];
    $video = $_POST['video'];
    //$imgfile=$_FILES["photo"]["name"];
    //$resume=$_FILES["resume"]["name"];

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $userQuery = "SELECT * FROM `candidates` WHERE `candidateID`='$id'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount > 0) {
        // user (reg_no) does not exist
        // add user
        //Hash the password
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
        // execute registration query(insert)
        $registerQuery = "UPDATE `candidates` SET firstName=?, middleName=?,lastName=?,email=?,phone=?,country=?,region=?,username=?,modifiedBy=?,age=?,dob=?,assessImportance=?,profile=?,video=?,password=? WHERE candidateID=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($fname,$mname,$lname,$email,$phone,$country,$region,$username,$manager,$age,$dob,$importance,$profile,$video,$passwordHash));


            echo "candidate updated successfully!!";  // successful
            //redirect to registration page
            header('location:viewCandidate.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during update";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "candidate doesnt exist";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}