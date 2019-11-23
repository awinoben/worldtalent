<?php

if ((isset($_POST['code'])) && (isset($_POST['group'])) && (isset($_POST['description']))) {
    // get the details of the new user  to register
    $code = $_POST['code'];
    $group = $_POST['group'];
    $description = $_POST['description'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `personality_rubric` WHERE `Code`='$code' AND `Grp`='$group'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `personality_rubric`(`Code`, `Grp`,`Description`) 
		                  VALUES ('$code','$group','$description')";
        try {
            $db->query($registerQuery);

            echo "Observation submitted successfully!!";  // successful
            //redirect to registration page
            header('location:prubrics.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Observation exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}