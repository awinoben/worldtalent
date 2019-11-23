<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['outcomeId'])) && (isset($_POST['outcomeset'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['outcomesettype']))) {
    $outcomeset = $_POST['outcomeset'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $outcomesettype = $_POST['outcomesettype'];
    $id=$_POST['outcomeId'];

    // check if user(email) exists
    $query = "SELECT * FROM `outcomes` WHERE `outcome_id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `outcomes` SET outcomeset=?, name=?,description=?,outcomesettype=?  WHERE outcome_id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($outcomeset,$name,$description,$outcomesettype));


            echo "updated successfully!!";  // successful
            //redirect to registration page
            header('location:outcomes.php');

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