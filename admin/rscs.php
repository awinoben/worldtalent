<?php
if ((isset($_POST['resourceset'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['resourcesettype']))) {
    // get the details of the new user  to register
    $resourceset = $_POST['resourceset'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $resourcesettype = $_POST['resourcesettype'];

//    echo $password;
//    return;

    require_once "../connect/dbconn.php";  // connect to database

    // check if user(email) exists
    $query = "SELECT * FROM `resources` WHERE `resourceset`='$resourceset'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count == 0) {
        // user (reg_no) does not exist
        // execute registration query(insert)
        $registerQuery = "INSERT INTO `resources` (`resourceset`, `name`,`description`,`resourcesettype`) 
		                  VALUES ('$resourceset','$name','$description','$resourcesettype')";
        try {
            $db->query($registerQuery);

            echo "Resource submitted successfully!!";  // successful
            //redirect to registration page
            header('location:resources.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during submission";     // failed
        }
    } else {
        // user already exists
        // registration is unnecesary
        // do nothing
        echo "Resource Set exists";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}