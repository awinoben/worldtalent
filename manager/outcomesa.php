<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['candidateID'])) && (isset($_POST['outcometype'])) && (isset($_POST['description'])) ) {
    // get the details of the new user  to register
    $candidateID = $_POST['candidateID'];
    $outcometype = $_POST['outcometype'];
    $description = $_POST['description'];

    // check if statement exists
    $userQuery = "SELECT * FROM `outcomes_candidates` WHERE `candidateID`='$candidateID' AND `outcometype`='$outcometype' ";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `outcomes_candidates`(`candidateID`,`outcometype`,`description`) 
		                  VALUES ('$candidateID','$outcometype','$description')";
        try {
            $db->query($registerQuery);

            $success="Outcomes submitted successfully!!";  // successful
            //redirect to registration page
            header('location:outcomesHome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } 
    else {
        // execute  update query if record exists
        $update = "UPDATE `outcomes_candidates` SET description=? WHERE candidateID='$candidateID' AND outcometype='$outcometype'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($description));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:outcomesHome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}