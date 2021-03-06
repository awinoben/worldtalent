<?php

if ((isset($_POST['name'])) && (isset($_POST['countryId'])) ) {
    // get the details of the new user  to register
    $name = $_POST['name'];
    $countryId = $_POST['countryId'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `cities` WHERE `cityName`='$name'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `cities`(`cityName`,`countryId`) 
		                  VALUES ('$name','$countryId')";
        try {
            $db->query($registerQuery);

            echo "Record submitted successfully!!";  // successful
            //redirect to registration page
            header('location:add-city.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Record exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}