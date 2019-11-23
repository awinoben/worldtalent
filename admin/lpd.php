<?php

if ((isset($_POST['lpd1'])) && (isset($_POST['lpd2'])) && (isset($_POST['lpd3'])) && (isset($_POST['lpd4']))  && (isset($_POST['lpd5'])) && (isset($_POST['lpd6'])) && (isset($_POST['lpd7'])) && (isset($_POST['lpd8']))) {
    // get the details of the new user  to register
    $lpd1 = $_POST['lpd1'];
    $lpd2 = $_POST['lpd2'];
    $lpd3 = $_POST['lpd3'];
    $lpd4 = $_POST['lpd4'];
    $lpd5 = $_POST['lpd5'];
    $lpd6 = $_POST['lpd6'];
    $lpd7 = $_POST['lpd7'];
    $lpd8 = $_POST['lpd8'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    //$query = "SELECT * FROM `preambles` WHERE `Code`='$code' AND `Grp`='$group'";
    //$result = $db->query($query);
    //$count = $result->rowCount();

    if ($lpd1 != "" && $lpd2 !="" && $lpd3 != "" && $lpd4 !="" && $lpd5 != "" && $lpd6 != "" && $lpd7 !="" && $lpd8 != "") {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `learning_prescription_delimiters` (`lpd1`, `lpd2`,`lpd3`,`lpd4`,`lpd5`,`lpd6`,`lpd7`,`lpd8`) 
		                  VALUES ('$lpd1','$lpd2','$lpd3','$lpd4','$lpd5','$lpd6','$lpd7','$lpd8')";
        try {
            $db->query($registerQuery);

            echo "Delimiters submitted successfully!!";  // successful
            //redirect to registration page
            header('location:lpdsetup.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Preamble Description exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}