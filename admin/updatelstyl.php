<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['lId'])) && (isset($_POST['code'])) && (isset($_POST['group'])) && (isset($_POST['description']))) {
    $code = $_POST['code'];
    $group = $_POST['group'];
    $description = $_POST['description'];
    $id=$_POST['lId'];

    // check if user(email) exists
    $query = "SELECT * FROM `learning_styles` WHERE `Id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `learning_styles` SET Code=?, Grp=?,Description=? WHERE Id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($code,$group,$description));


            echo "observation updated successfully!!";  // successful
            //redirect to registration page
            header('location:lstyles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during update";     // failed
        }
    } else {

        echo "Observation doesnt exist";
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}