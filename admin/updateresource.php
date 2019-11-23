<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['resourceId'])) && (isset($_POST['resourceset'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['resourcesettype']))) {
    $resourceset = $_POST['resourceset'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $resourcesettype = $_POST['resourcesettype'];
    $id=$_POST['resourceId'];

    // check if user(email) exists
    $query = "SELECT * FROM `resources` WHERE `resource_id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `resources` SET resourceset=?, name=?,description=?,resourcesettype=?  WHERE resource_id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($resourceset,$name,$description,$resourcesettype));


            echo "updated successfully!!";  // successful
            //redirect to registration page
            header('location:resources.php');

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