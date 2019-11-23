<?php
if ((isset($_POST['itemref'])) && (isset($_POST['taskref'])) && (isset($_POST['description'])) && (isset($_POST['startdate'])) && (isset($_POST['enddate'])) && (isset($_POST['cost']))) {
    // get the details of the new user  to register
    $itemref = $_POST['itemref'];
    $taskref = $_POST['taskref'];
    $description = $_POST['description'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $cost = $_POST['cost'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `talent_prescription_tasks` WHERE `itemref`='$itemref'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `talent_prescription_tasks` (`itemref`, `taskref`,`description`,`startdate`,`enddate`,`cost`) 
		                  VALUES ('$itemref','$taskref','$description','$startdate','$enddate','$cost')";
        try {
            $db->query($registerQuery);

            echo "prescription submitted successfully!!";  // successful
            //redirect to registration page
            header('location:talentpresctasks.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Prsecription exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}