<?php
require_once "../connect/dbconn.php";  // connect to database
if ((isset($_POST['expert'])) && (isset($_POST['candidateID'])) && (isset($_POST['basestandards'])) && (isset($_POST['augmodels']))  ) {
    // get the details of the new user  to register
    $expert = $_POST['expert'];
    $candidateID = $_POST['candidateID'];
    $basestandards= implode("<br> ",$_POST['basestandards']);
    $augmodels = implode("<br> ",$_POST['augmodels']);

    // check if statement exists
    $userQuery = "SELECT * FROM `professional_delimeters` WHERE `candidateID`='$candidateID'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 0) {
        //if no existing statement for the selected candidate execute (insert)
        $registerQuery = "INSERT INTO `professional_delimeters`(`candidateID`, `expert`,`base_standards`,`augmenting_models`) 
		                  VALUES ('$candidateID','$expert','$basestandards','$augmodels')";
        try {
            $db->query($registerQuery);

            $success="Statement submitted successfully!!";  // successful
            //redirect to registration page
            header('location:professionalhome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $error="problem encountered during submission";     // failed
        }
    } else {
        // execute  update query if record exists
        $update = "UPDATE `professional_delimeters` SET expert=?, base_standards=?,augmenting_models=? WHERE candidateID='$candidateID'";
        try {
            $row=$db->prepare($update);
            //todo
            //$date=getdate();
            $row->execute(array($expert,$basestandards,$augmodels));

            $updateSuccess="Updated successfully!!";  // successful
            //redirect to registration page
            header('location:professionalhome.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            $updateError="problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "empty";
}