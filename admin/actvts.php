<?php
if ((isset($_POST['activityset'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['activitysettype']))) {
    // get the details of the new user  to register
    $activityset = $_POST['activityset'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $activitysettype = $_POST['activitysettype'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `activities` WHERE `activityset`='$activityset'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `activities` (`activityset`, `name`,`description`,`activitysettype`) 
		                  VALUES ('$activityset','$name','$description','$activitysettype')";
        try {
            $db->query($registerQuery);

            echo "Activity submitted successfully!!";  // successful
            //redirect to registration page
            header('location:activities.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Activity Set exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}