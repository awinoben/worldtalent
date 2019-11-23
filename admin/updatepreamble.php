<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['preamble'])) && (isset($_POST['description']))) {
    $preamble = $_POST['preamble'];
    $description = $_POST['description'];
    $id=$_POST['preambleId'];

    // check if user(email) exists
    $query = "SELECT * FROM `preambles` WHERE `preamble_id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `preambles` SET preamble=?, description=? WHERE preamble_id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($preamble,$description));


            echo "updated successfully!!";  // successful
            //redirect to registration page
            header('location:preamblesetup.php');

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