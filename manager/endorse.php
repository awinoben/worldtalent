<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['expert'])) && (isset($_POST['candidateID'])) && (isset($_POST['firstEndorser'])) && (isset($_POST['secondEndorser']))) {
    // get the details of the new user  to register
    $expert = $_POST['expert'];
    $candidateID = $_POST['candidateID'];
    $firstEndorser= $_POST['firstEndorser'];
    $secondEndorser= $_POST['secondEndorser'];

    // check if statement exists
    $userQuery = "SELECT * FROM `endorsers` WHERE `candidateID`='$candidateID'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `endorsers`(`candidateID`, `expert`,`firstEndorser`,`secondEndorser`) 
		                  VALUES ('$candidateID','$expert','$firstEndorser','$secondEndorser')";
        try {
            $db->query($registerQuery);

            $success="Statement submitted successfully!!";  // successful
            //redirect to registration page
            header('location:endorsehome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } else {
        // execute  update query if record exists
        $update = "UPDATE `endorsers` SET expert=?, firstEndorser=?,secondEndorser=? WHERE candidateID='$candidateID'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($expert,$firstEndorser,$secondEndorser));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:endorsehome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}