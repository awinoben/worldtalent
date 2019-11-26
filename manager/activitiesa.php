<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['candidateID'])) && (isset($_POST['description'])) ) {
    // get the details of the new user  to register
    $candidateID = $_POST['candidateID'];
    $activitytype = $_POST['activitytype'];
    $description= $_POST['description'];

    // check if statement exists
    $userQuery = "SELECT * FROM `activities_candidates` WHERE `candidateID`='$candidateID' AND `activitytype`='$activitytype'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `activities_candidates`(`candidateID`,`activitytype`,`description`) 
		                  VALUES ('$candidateID','$activitytype','$description')";
        try {
            $db->query($registerQuery);

            $success="Activity submitted successfully!!";  // successful
            //redirect to registration page
            header('location:activitiesHome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } 
    else {
        // execute  update query if record exists
        $update = "UPDATE `activities_candidates` SET description=? WHERE candidateID='$candidateID' AND `activitytype`='$activitytype'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($description));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:activitiesHome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}