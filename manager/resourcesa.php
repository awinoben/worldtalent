<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['candidateID'])) && (isset($_POST['resourcetype'])) && (isset($_POST['description'])) ) {
    // get the details of the new user  to register
    $candidateID = $_POST['candidateID'];
    $resourcetype = $_POST['resourcetype'];
    $description= $_POST['description'];

    // check if statement exists
    $userQuery = "SELECT * FROM `resources_candidate` WHERE `candidateID`='$candidateID' AND `resourcetype`='$resourcetype'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `resources_candidate`(`candidateID`,`resourcetype`,`description`) 
		                  VALUES ('$candidateID','$resourcetype','$description')";
        try {
            $db->query($registerQuery);

            $success="Resource submitted successfully!!";  // successful
            //redirect to registration page
            header('location:resourcesHome.php');

        } catch (PDOException $exception) {
            // echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } 
    else {
        // execute  update query if record exists
        $update = "UPDATE `resources_candidate` SET description=? WHERE candidateID='$candidateID' AND resourcetype='$resourcetype'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($description));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:resourcesHome.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}