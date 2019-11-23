<?php
require_once "../connect/dbconn.php";
if((isset($_POST['countryId'])) && (isset($_POST['cityId'])) && (isset($_POST['name']))) {    // get the details of the new user  to register
    $name = $_POST['name'];
    $id=$_POST['cityId'];
    $country=$_POST['countryId'];

    // check if user(email) exists
    $query = "SELECT * FROM `cities` WHERE `Id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `cities` SET cityName=?,countryId=? WHERE Id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($name,$country));


            echo "Record updated successfully!!";  // successful
            //redirect to registration page
            header('location:add-city.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during update";     // failed
        }
    } else {

        echo "Record doesnt exist";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}
