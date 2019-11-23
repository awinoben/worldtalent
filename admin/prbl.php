<?php
if ((isset($_POST['preamble'])) && (isset($_POST['description']))) {
    $preamble = $_POST['preamble'];
    $description = $_POST['description'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `preambles` WHERE `preamble`='$preamble'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `preambles` (`preamble`,`description`) 
		                  VALUES ('$preamble','$description')";
        try {
            $db->query($registerQuery);

            echo "Preamble submitted successfully!!";  // successful
            //redirect to registration page
            header('location:preamblesetup.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Preamble Set exists";
    }
} 
else {
    // the expected details of the new user were not found
    echo "empty";
}