<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['candidateID'])) && (isset($_POST['itemref'])) && (isset($_POST['taskref'])) && (isset($_POST['description'])) ) {
    // get the details of the new user  to register
    $candidateID = $_POST['candidateID'];
    $itemref = $_POST['itemref'];
    $taskref = $_POST['taskref'];
    $description = $_POST['description'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $cost = $_POST['cost'];

    // check if statement exists
    $userQuery = "SELECT * FROM `prescriptiontasks_candidate` WHERE `candidateID`='$candidateID' AND `itemref`='$itemref'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `prescriptiontasks_candidate`(`candidateID`, `itemref`, `taskref`,`startdate`, `enddate`,`cost`, `description`) 
		                  VALUES ('$candidateID','$itemref', '$taskref','$startdate','$enddate','$cost', '$description')";
        try {
            $db->query($registerQuery);

            $success="Prescription Task submitted successfully!!";  // successful
            //redirect to registration page
            header('location:prescriptiontasksHome.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } 
    else {
        // execute  update query if record exists
        $update = "UPDATE `prescriptiontasks_candidate` SET itemref=?,taskref=?,startdate=?,enddate=?,cost=?,description=? WHERE candidateID='$candidateID' AND itemref='$itemref'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($itemref,$taskref,$startdate,$enddate,$cost,$description));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:prescriptiontasksHome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}