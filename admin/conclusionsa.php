<?php

if ((isset($_POST['expert'])) && (isset($_POST['candidateID'])) && (isset($_POST['genre'])) && (isset($_POST['modifiers'])) && (isset($_POST['academic'])) && (isset($_POST['occupation'])) ) {
    // get the details of the new user  to register
    $expert = $_POST['expert'];
    $candidateID = $_POST['candidateID'];
    $genre= $_POST['genre'];
    $academic = $_POST['academic'];
    $modifiers = $_POST['modifiers'];
    $occupation = $_POST['occupation'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if record exists
    $userQuery = "SELECT * FROM `conclusions` WHERE `candidateID`='$candidateID'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `conclusions`(`candidateID`, `expert`,`academic_theme_scale`,`talent_genre_dev`,`modifiers`,`occupation_theme`) 
		                  VALUES ('$candidateID','$expert','$academic','$genre','$modifiers','$occupation')";
        try {
            $db->query($registerQuery);

            $success="Statement submitted successfully!!";  // successful
            //redirect to registration page
            header('location:conclusionsassign.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } else {
        // execute  update query if record exists
        $update = "UPDATE `conclusions` SET expert=?, academic_theme_scale=?,talent_genre_dev=?,modifiers=?,occupation_theme=? WHERE candidateID='$candidateID'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($expert,$academic,$genre,$modifiers,$occupation));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:conclusionsassign.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}