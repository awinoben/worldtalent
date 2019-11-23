<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['activityId'])) && (isset($_POST['activityset'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['activitysettype']))) {
    $activityset = $_POST['activityset'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $activitysettype = $_POST['activitysettype'];
    $id=$_POST['activityId'];

    // check if user(email) exists
    $query = "SELECT * FROM `activities` WHERE `activity_id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `activities` SET activityset=?, name=?,description=?,activitysettype=?  WHERE activity_id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($activityset,$name,$description,$activitysettype));


            echo "updated successfully!!";  // successful
            //redirect to registration page
            header('location:activities.php');

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