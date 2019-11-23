<?php
if ((isset($_POST['outcomeset'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['outcomesettype']))) {
    // get the details of the new user  to register
    $outcomeset = $_POST['outcomeset'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $outcomesettype = $_POST['outcomesettype'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `outcomes` WHERE `outcomeset`='$outcomeset'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `outcomes` (`outcomeset`, `name`,`description`,`outcomesettype`) 
		                  VALUES ('$outcomeset','$name','$description','$outcomesettype')";
        try {
            $db->query($registerQuery);

            echo "Outcome submitted successfully!!";  // successful
            //redirect to registration page
            header('location:outcomes.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Outcome Set exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}