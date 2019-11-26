<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['candidateID'])) && (isset($_POST['lpd1'])) && (isset($_POST['lpd2'])) && (isset($_POST['lpd3'])) && (isset($_POST['lpd4'])) && (isset($_POST['lpd5'])) && (isset($_POST['lpd6'])) && (isset($_POST['lpd7'])) && (isset($_POST['lpd8'])) ) {
    // get the details of the new user  to register
    $candidateID = $_POST['candidateID'];
    $lpd1 = $_POST['lpd1'];
    $lpd2 = $_POST['lpd2'];
    $lpd3 = $_POST['lpd3'];
    $lpd4 = $_POST['lpd4'];
    $lpd5 = $_POST['lpd5'];
    $lpd6 = $_POST['lpd6'];
    $lpd7 = $_POST['lpd7'];
    $lpd8 = $_POST['lpd8'];



    // check if statement exists

    $userQuery = "SELECT * FROM `lpd_candidates` WHERE `candidateID`='$candidateID'";

    $userResult = $db->query($userQuery);

    $userCount = $userResult->rowCount();



    if ($userCount == 0) {

        //if no existing statement for the selected candidate execute (insert)

        $registerQuery = "INSERT INTO `lpd_candidates`(`candidateID`, `lpd1`, `lpd2`, `lpd3`, `lpd4`, `lpd5`, `lpd6`, `lpd7`,`lpd8` ) 

		                  VALUES ('$candidateID','$lpd1','$lpd2','$lpd3','$lpd4','$lpd5','$lpd6','$lpd7','$lpd8')";
        try {
            $db->query($registerQuery);

            $success="Learning Prsecription Delimiter submitted successfully!!";  // successful
            //redirect to registration page
            header('location:lpdHome.php');

        } catch (PDOException $exception) {
            // echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } 
    else {
        // execute  update query if record exists
        $update = "UPDATE `lpd_candidates` SET lpd1=?,lpd2=?,lpd3=?,lpd4=?,lpd5=?,lpd6=?,lpd7=?,lpd8=? WHERE candidateID='$candidateID'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($lpd1,$lpd2,$lpd3,$lpd4,$lpd5,$lpd6,$lpd7,$lpd8));

            $updateSuccess="Record Updated successfully!!";  // successful
            //redirect to registration page
            header('location:lpdHome.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}