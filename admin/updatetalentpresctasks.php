<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['talentprescId'])) && (isset($_POST['itemref'])) && (isset($_POST['taskref'])) && (isset($_POST['description'])) && (isset($_POST['startdate'])) && (isset($_POST['enddate'])) && (isset($_POST['cost']))) {
    $itemref = $_POST['itemref'];
    $taskref = $_POST['taskref'];
    $description = $_POST['description'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $cost = $_POST['cost'];
    $id=$_POST['talentprescId'];

    // check if user(email) exists
    $query = "SELECT * FROM `talent_prescription_tasks` WHERE `presc_id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `talent_prescription_tasks` SET itemref=?, taskref=?,description=?,startdate=?, enddate=?,cost=?  WHERE presc_id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($itemref,$taskref,$description,$startdate,$enddate,$cost));


            echo "updated successfully!!";  // successful
            //redirect to registration page
            header('location:talentpresctasks.php');

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