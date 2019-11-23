<?php
require_once "../connect/dbconn.php";
if ((isset($_POST['lpdId'])) && (isset($_POST['lpd1'])) && (isset($_POST['lpd2'])) && (isset($_POST['lpd3'])) && (isset($_POST['lpd4']))  && (isset($_POST['lpd5'])) && (isset($_POST['lpd6'])) && (isset($_POST['lpd7'])) && (isset($_POST['lpd8']))) {
    $lpd1 = $_POST['lpd1'];
    $lpd2 = $_POST['lpd2'];
    $lpd3 = $_POST['lpd3'];
    $lpd4 = $_POST['lpd4'];
    $lpd5 = $_POST['lpd5'];
    $lpd6 = $_POST['lpd6'];
    $lpd7 = $_POST['lpd7'];
    $lpd8 = $_POST['lpd8'];
    $id=$_POST['lpdId'];

    // check if user(email) exists
    $query = "SELECT * FROM `learning_prescription_delimiters` WHERE `lpd_id`='$id'";
    $result = $db->query($query);
    $count = $result->rowCount();

    if ($count > 0) {
        // execute registration query(insert)
        $registerQuery = "UPDATE `learning_prescription_delimiters` SET lpd1=?, lpd2=?,lpd3=?,lpd4=?, lpd5=?, lpd6=?,lpd7=?,lpd8=?  WHERE lpd_id=$id";
        try {
            $q=$db->prepare($registerQuery);
            //todo
            $q->execute(array($lpd1,$lpd2,$lpd3,$lpd4,$lpd5,$lpd6,$lpd7,$lpd8));


            echo "updated successfully!!";  // successful
            //redirect to registration page
            header('location:lpdsetup.php');

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