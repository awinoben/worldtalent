<?php

if ((isset($_POST['expert'])) && (isset($_POST['candidateID'])) && (isset($_POST['observation'])) && (isset($_POST['rubric'])) && (isset($_POST['style'])) && (isset($_POST['domain'])) ) {
    // get the details of the new user  to register
    $expert = $_POST['expert'];
    $candidateID = $_POST['candidateID'];
    $observation= $_POST['observation'];
    $rubric = $_POST['rubric'];
    $style = $_POST['style'];
    $domain = $_POST['domain'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if statement exists
    $userQuery = "SELECT * FROM `expert_statements` WHERE `candidateID`='$candidateID'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `expert_statements`(`candidateID`, `expert`,`general_observation`,`personality_rubric`,`learning_style`,`talent_domain`) 
		                  VALUES ('$candidateID','$expert','$observation','$rubric','$style','$domain')";
        try {
            $db->query($registerQuery);

            $success="Statement submitted successfully!!";  // successful
            //redirect to registration page
            header('location:statementAssign.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } else {
        // execute  update query if record exists
        $update = "UPDATE `expert_statements` SET expert=?, general_observation=?,personality_rubric=?,learning_style=?,talent_domain=? WHERE candidateID='$candidateID'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($expert,$observation,$rubric,$style,$domain));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:statementAssign.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}